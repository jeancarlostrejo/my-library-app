<?php

namespace App\Filament\Resources;

use App\Enums\ReadingStatus;
use App\Filament\Resources\BookResource\Pages;
use App\Filament\Resources\BookResource\RelationManagers;
use App\Models\Book;
use Filament\Actions\Action;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Support\Enums\ActionSize;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Enum;
use Illuminate\Support\Str;

class BookResource extends Resource
{
    protected static ?string $model = Book::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state)))
                    ->maxLength(255),
                Forms\Components\TextInput::make('slug')
                    ->unique(ignoreRecord: true)
                    ->required()
                    ->readOnly()
                    ->maxLength(255),
                Select::make('genre_id')
                    ->label('Genre')
                    ->relationship('Genres', 'name')
                    ->searchable()
                    ->preload()
                    ->createOptionForm([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull()
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state))),
                        Forms\Components\TextInput::make('slug')
                            ->readOnly()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255)
                    ])
                    ->multiple(),
                Forms\Components\Select::make('author_id')
                    ->required()
                    ->searchable()
                    ->relationship('author', 'name')
                    ->preload()
                    ->createOptionForm([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),
                        Textarea::make('description')
                            ->nullable()
                            ->autosize()
                            ->maxLength(5000)
                            ->columnSpanFull()
                            ->rows(10),
                        FileUpload::make('photo')
                            ->nullable()
                            ->label('Author Photo')
                            ->image()
                            ->directory('authors')
                            ->columnSpanFull(),
                    ])->editOptionForm([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),
                        Textarea::make('description')
                            ->nullable()
                            ->autosize()
                            ->maxLength(10000)
                            ->columnSpanFull()
                            ->rows(10),
                        FileUpload::make('photo')
                            ->nullable()
                            ->label('Author Photo')
                            ->image()
                            ->directory('authors')
                            ->columnSpanFull(),
                    ]),
                Forms\Components\Textarea::make('synopsis')
                    ->required()
                    ->rows(6)
                    ->maxLength(10000)
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('cover_image')
                    ->required()
                    ->directory('books')
                    ->image()
                    ->maxSize(1024),
                Forms\Components\TextInput::make('pages')
                    ->required()
                    ->numeric()
                    ->minValue(1),
                Forms\Components\DatePicker::make('started_reading_at')
                    ->nullable(),
                Forms\Components\Select::make('reading_status')
                    ->required()
                    ->enum(ReadingStatus::class)
                    ->options(ReadingStatus::class)
                    ->default(ReadingStatus::PENDING->value)
                    ->reactive()
                    ->afterStateUpdated(function (Set $set, $state, Get $get) {
                        $pages = $get('pages');

                        if ($state === ReadingStatus::COMPLETED->value && $pages > 0) {
                            $set('pages_read', $get('pages'));
                        }
                    }),
                Forms\Components\TextInput::make('pages_read')
                    ->required()
                    ->numeric()
                    ->minValue(0)
                    ->rules(fn(Get $get)=> ['lte:' . $get('pages')])
                    ->default(0),
                Forms\Components\TextInput::make('published_year')
                    ->nullable()
                    ->numeric()
                    ->maxValue(now()->addYear()->year),
                Forms\Components\Toggle::make('is_active')
                    ->label('Is Active')
                    ->default(false)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('cover_image')
                    ->height(100)
                    ->url(fn($record) => $record->cover_image ? Storage::url($record->cover_image) : null)
                    ->openUrlInNewTab(fn($record) => $record->cover_image !== null),

                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->url(
                        fn($record) => match ($record->reading_status) {
                            ReadingStatus::PENDING => route('readings.upcoming.show', $record->slug),
                            ReadingStatus::COMPLETED => route('readings.completed.show', $record->slug),
                            ReadingStatus::READING => route('readings.current'),
                        }
                    )
                    ->limit(20)
                    ->tooltip(fn($record) => $record->title)
                    ->openUrlInNewTab(),
                Tables\Columns\TextColumn::make('genres.name')
                    ->label('Genres')
                    ->listWithLineBreaks()
                    ->tooltip(fn($record) => $record->genres->pluck('name')->join(', '))
                    ->toggleable(isToggledHiddenByDefault: false),
                Tables\Columns\TextColumn::make('pages')
                    ->numeric()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: false),
                Tables\Columns\TextColumn::make('pages_read')
                    ->numeric()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('author.name')
                    ->numeric()
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('started_reading_at')
                    ->date('d-m-Y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('reading_status')
                    ->badge()
                    ->sortable()
                    ->action(
                        Tables\Actions\Action::make('changeStatus')
                            ->label('Change Status')
                            ->form([
                                Forms\Components\Select::make('reading_status')
                                    ->options(ReadingStatus::class)
                                    ->enum(ReadingStatus::class)
                                    ->default(fn(Book $record) => $record->reading_status)
                                    ->required()
                            ])
                            ->action(function ($data, $record) {
                                $record->update(['reading_status' => $data['reading_status']]);
                            })
                    ),
                Tables\Columns\ToggleColumn::make('is_active')
                    ->label('Active')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: false),
                Tables\Columns\TextColumn::make('published_year')
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('reading_status')
                    ->options(ReadingStatus::class)
                    ->label('Reading Status'),
                Tables\Filters\SelectFilter::make('is_active')
                    ->options([
                        '1' => 'Active',
                        '0' => 'Inactive',
                    ])
                    ->label('Active Status'),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make()->color('primary'),
                    Tables\Actions\ViewAction::make()->color('info'),
                    Tables\Actions\DeleteAction::make()
                        ->color('danger'),
                ])
                    ->label('Actions')
                    ->icon('heroicon-m-ellipsis-vertical')
                    ->size(ActionSize::Small)
                    ->color('primary')
                    ->button()
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\BulkAction::make('toggleIsActive')
                        ->label('Toggle Active Status')
                        ->icon('heroicon-o-arrow-path')
                        ->action(function ($records) {
                            $records->each(function ($record) {
                                $record->update(['is_active' => !$record->is_active]);
                            });
                        })
                        ->requiresConfirmation()
                        ->color('warning'),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBooks::route('/'),
            'create' => Pages\CreateBook::route('/create'),
            'edit' => Pages\EditBook::route('/{record}/edit'),
        ];
    }
}

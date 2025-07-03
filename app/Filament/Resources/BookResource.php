<?php

namespace App\Filament\Resources;

use App\Enums\ReadingStatus;
use App\Filament\Resources\BookResource\Pages;
use App\Filament\Resources\BookResource\RelationManagers;
use App\Models\Book;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Validation\Rules\Enum;
use Illuminate\Support\Str;

class BookResource extends Resource
{
    protected static ?string $model = Book::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
                            ->maxLength(5000)
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
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('cover_image')
                    ->required()
                    ->directory('books')
                    ->image(),
                Forms\Components\TextInput::make('pages')
                    ->required()
                    ->numeric()
                    ->minValue(1),
                Forms\Components\DatePicker::make('started_reading_at')
                    ->nullable(),
                Forms\Components\Select::make('reading_status')
                    ->required()
                    ->options(
                        collect(ReadingStatus::cases())->mapWithKeys(function ($case) {
                            return [$case->value => $case->label()];
                        })->toArray()
                    )
                    ->default(ReadingStatus::PENDING->value)
                    ->rule(new Enum(ReadingStatus::class)),
                Forms\Components\TextInput::make('pages_read')
                    ->required()
                    ->numeric()
                    ->minValue(0)
                    ->default(0),
                Forms\Components\TextInput::make('published_year')
                    ->nullable()
                    ->numeric()
                    ->maxValue(now()->year)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('author.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('started_reading_at')
                    ->date('d-m-Y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('reading_status')
                    ->badge()
                    ->colors([
                        'gray' => ReadingStatus::PENDING->value,
                        'info' => ReadingStatus::READING->value,
                        'success' => ReadingStatus::COMPLETED->value,
                    ])
                    ->sortable(),
                Tables\Columns\TextColumn::make('published_year'),
                Tables\Columns\TextColumn::make('created_at'),
                Tables\Columns\TextColumn::make('updated_at')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),

            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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

<?php

namespace App\Filament\Widgets;

use App\Enums\ReadingStatus;
use App\Models\Author;
use App\Models\Book;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class BooksOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Books', Book::count())
                ->description('Total number of books currently in the library')
                ->icon('heroicon-o-book-open')
                ->color('primary'),
            Stat::make('Total Authors', Author::count())
                ->description('Total number of authors in the library')
                ->color('primary')
                ->icon('heroicon-o-user-group'),
            Stat::make('Total Readings completed', Book::query()->where('reading_status', ReadingStatus::COMPLETED)->count())
                ->description('Total number of books with completed status')
                ->color('success')
                ->icon('heroicon-o-check-circle'),
            Stat::make('Total number of books I am currently reading', Book::where('reading_status', ReadingStatus::READING)->count())
                ->description('Total number of books with reading status')
                ->color('info')
                ->icon('heroicon-o-eye'),
            Stat::make('Total books pending', Book::where('reading_status', ReadingStatus::PENDING)->count())
                ->description('Total number of books with pending status')
                ->icon('heroicon-o-clock')
                ->color('gray')
        ];
    }
}

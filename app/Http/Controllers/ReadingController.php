<?php

namespace App\Http\Controllers;

use App\Enums\ReadingStatus;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ReadingController extends Controller
{
    public function current(): View
    {
        $book = Book::with(['author', 'genres'])
            ->where('reading_status', ReadingStatus::READING)
            ->first();

        return view('readings.current', compact('book'));
    }

    public function upcoming(): View
    {
        $upcomingReadings = Book::with(['author', 'genres'])
            ->where('reading_status', ReadingStatus::PENDING)
            ->paginate(12);

        return view('readings.upcoming', compact('upcomingReadings'));
    }

    public function upcomingShow(Book $book): View
    {
        $book->load(['author', 'genres']);

        if ($book->reading_status !== ReadingStatus::PENDING) {
            abort(404);
        }

        return view('readings.upcoming-show', compact('book'));
    }

    public function completed(): View
    {
        $booksCompleted = Book::with(['author', 'genres'])
            ->where('reading_status', ReadingStatus::COMPLETED)
            ->paginate(12);

        return view('readings.completed', compact('booksCompleted'));
    }

    public function completedShow(Book $book): View
    {
        $book->load(['author', 'genres']);

        if ($book->reading_status !== ReadingStatus::COMPLETED) {
            abort(404);
        }

        return view('readings.completed-show', compact('book'));
    }
}

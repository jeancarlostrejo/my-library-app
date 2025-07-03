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
            ->paginate(1);

        return view('readings.upcoming', compact('upcomingReadings'));
    }

    public function upcomingShow(Book $book): View
    {
        $book->load(['author', 'genres']);

        return view('readings.upcoming-show', compact('book'));
    }
}

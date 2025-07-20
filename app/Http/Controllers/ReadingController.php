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
            ->active()
            ->where('reading_status', ReadingStatus::READING)
            ->first();

        return view('readings.current', compact('book'));
    }

    public function upcoming(): View
    {
        return view('readings.upcoming');
    }

    public function upcomingShow(Book $book): View
    {
        $book->load(['author', 'genres']);

        if ($book->reading_status !== ReadingStatus::PENDING || !$book->is_active) {
            abort(404);
        }

        return view('readings.upcoming-show', compact('book'));
    }

    public function completed(): View
    {
        return view('readings.completed');
    }

    public function completedShow(Book $book): View
    {
        $book->load(['author', 'genres']);

        if ($book->reading_status !== ReadingStatus::COMPLETED || !$book->is_active) {
            abort(404);
        }

        return view('readings.completed-show', compact('book'));
    }
}

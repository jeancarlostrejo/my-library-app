<?php

namespace App\Http\Controllers;

use App\Enums\ReadingStatus;
use App\Models\Book;
use Illuminate\Http\Request;

class ReadingController extends Controller
{
    public function current()
    {
        $book = Book::with(['author', 'genres'])
            ->where('reading_status', ReadingStatus::READING)
            ->first();

        return view('readings.current', compact('book'));
    }

    public function upcoming()
    {
        return view('readings.upcoming');
    }
}

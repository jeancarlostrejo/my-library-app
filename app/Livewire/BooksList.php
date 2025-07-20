<?php

namespace App\Livewire;

use App\Enums\ReadingStatus;
use App\Models\Book;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class BooksList extends Component
{
    use WithPagination;

    public $legend;
    public $route;
    public $type;
    public $searchAuthor;
    public $searchBookName;

    #[On('search-inputs-data')]
    public function search($author, $bookName)
    {
        $this->searchAuthor = $author;
        $this->searchBookName = $bookName;
    }

    public function mount($legend = '', $route = '#', $type = 'upcoming')
    {
        $this->legend = $legend;
        $this->type = $type;
        $this->route = $route;
    }

    public function getBooks()
    {
        return match ($this->type) {
            'completed' => Book::with(['author', 'genres'])
                ->active()
                ->where('reading_status', ReadingStatus::COMPLETED)
                ->when($this->searchAuthor, function ($query) {
                    $query->whereHas('author', function ($authorQuery) {
                        $authorQuery->where('name', 'like', '%' . $this->searchAuthor . '%');
                    });
                })
                ->when($this->searchBookName, function ($query) {
                    $query->where('title', 'like', '%' . $this->searchBookName . '%');
                })
                ->orderBy('started_reading_at', 'desc')
                ->paginate(12),
            'upcoming' => Book::with(['author', 'genres'])
                ->active()
                ->where('reading_status', ReadingStatus::PENDING)
                ->when($this->searchAuthor, function ($query) {
                    $query->whereHas('author', function ($authorQuery) {
                        $authorQuery->where('name', 'like', '%' . $this->searchAuthor . '%');
                    });
                })
                ->when($this->searchBookName, function ($query) {
                    $query->where('title', 'like', '%' . $this->searchBookName . '%');
                })
                ->paginate(12),
            default => collect(),
        };
    }

    public function render()
    {
        $books = $this->getBooks();
        return view('livewire.books-list', compact('books'));
    }
}

<?php

namespace App\Livewire;

use Livewire\Component;

class FilterBooks extends Component
{
    public $author;
    public $bookName;

    // dispatches an event to the parent component to update books list based on search inputs
    public function dataSearch()
    {
        $this->dispatch('search-inputs-data',  $this->author, $this->bookName);
    }

    public function render()
    {
        return view('livewire.filter-books');
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BookSearch extends Component
{
    public $search;
    public $books = [];

    public function search() {
        $this->books = \App\Models\Book::where('title', 'LIKE', "%{$this->search}%")->get();
    }
    public function render()
    {
        return view('livewire.book-search');
    }
}

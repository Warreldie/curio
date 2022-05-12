<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BookSearch extends Component
{
    public $search;

    public function render()
    {
        return view('livewire.book-search');
    }
}

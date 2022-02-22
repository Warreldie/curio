<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = \DB::table('books')->get();
        $data['books'] = $books;
        return view('books/index', $data);
    }
    public function details(\App\Models\Book $book){ 
        $data['book'] = $book;
        return view('books/details', $data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Book;

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
    public function create(){
        return view('books/create');
    }
    public function store(Request $request){
        $book = new Book();
        $book->title = $request->input('title');
        $book->writer_id = 0;
        $book->save();
        return redirect('books/');
    }
}

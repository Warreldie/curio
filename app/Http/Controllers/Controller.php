<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(){
        if (Auth::check()) {
            // The user is logged in...
            $id = Auth::id();
            $user = \DB::table("users")->where("id", $id)->first();
            $users = \DB::table("users")->take(10)->get();
            $book = \DB::table("books")->where("id", 1)->first();
            $writer = \DB::table("writers")->where("id", $book->writer_id)->first();
            $data['book'] = $book; 
            $data['user'] = $user;
            $data['users'] = $users;
            $data['writer'] = $writer;
            return view('/index', $data);
        }else{
            return view('/signin/index');
        }
    }
    public function bookclub(){
        if (Auth::check()) {
            // The user is logged in...
            $id = Auth::id();
            $user = \DB::table("users")->where("id", $id)->first();
            $data['users'] = $user;
            return view('bookclub/index', $data);
        }else{
            return view('/signin/index');
        } 
    }
    public function bookshelf(){
        if (Auth::check()) {
            // The user is logged in...
            $id = Auth::id();
            $user = \DB::table("users")->where("id", $id)->first();
            $data['users'] = $user;
            $books = \DB::table('books')->paginate(5);
            $data['books'] = $books;
            return view('bookshelf/index', $data);
        }else{
            return view('/signin/index');
        } 
    }
    public function locations(){
        if (Auth::check()) {
            // The user is logged in...
            $id = Auth::id();
            $user = \DB::table("users")->where("id", $id)->first();
            $data['users'] = $user;
            return view('locations/index', $data);
        }else{
            return view('/signin/index');
        } 
    }
    public function settings(){
        if (Auth::check()) {
            // The user is logged in...
            $id = Auth::id();
            $user = \DB::table("users")->where("id", $id)->first();
            $data['users'] = $user;
            return view('settings/index', $data);
        }else{
            return view('/signin/index');
        } 
    }
}

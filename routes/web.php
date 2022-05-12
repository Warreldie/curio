<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\SignInController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('index');
});
Route::get('/bookclub', function(){
    return view('bookclub/index');
});
Route::get('/locations', function(){
    return view('locations/index');
});
Route::get('/settings', function(){
    return view('settings/index');
});

Route::get('/users', function(){
    $users = \DB::table("users")->get();
    $data['users'] = $users;
    return view('users/index', $data);
});
Route::get('/writers', [WriterController::class, 'index']);
Route::get('/writers/create', [WriterController::class, 'create']);
Route::post('/writers/store', [WriterController::class, 'store']);
Route::get('/writers/{writer}', [WriterController::class, 'details']);

Route::get('/books', [BookController::class, 'index']);
Route::get('/bookshelf', [BookController::class, 'bookshelf']);
Route::get('/books/create', [BookController::class, 'create']);
Route::post('/books/store', [BookController::class, 'store']);
Route::get('/books/{book}', [BookController::class, 'details']);

Route::get('/signup', [SignUpController::class, 'create']);
Route::post('/signup/store', [SignUpController::class, 'store']);

Route::get('/signin', [SignInController::class, 'signin']);
Route::post('/signin/try', [SignInController::class, 'try']);

/*
    $data['books']=[
        "Lolita",
        "The Count of Monte Cristo",
        "Edgar Allen Poems",
        "Pride and Prejudice"
    ];
    $data['author']=[
        "Vladimir Nabokov",
        "Alexandre Dumas",
        "Edgar Allen",
        "Oscar Wilde"
    ];

    function(){return view('bookshelf/index', $data);}
*/
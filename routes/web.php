<?php

use App\Http\Controllers\BookController;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [BookController::class, 'index']);
Route::get('/categories', function () {
    $books = Book::all();
    return view("categories")->with(["books" => $books]);
});

Route::get('/admin', function () {

    return view("admin.dash");
});

Auth::routes();

// Auth::user()->email == "test" ?  view('welcome') :  view('welcome');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

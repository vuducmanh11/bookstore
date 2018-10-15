<?php

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

use App\Book;

Route::get('/', function () {
    $books = Book::
        latest($column = 'created_at')
        ->take(10)
        ->get();
    return view('welcome', compact('books'));
});

Route::get('profile/{name}', 'ProfileController@showProfile');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@showProfile');
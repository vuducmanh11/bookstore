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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Admin
Route::get('admin/profile', 'AdminController@showProfile');
Route::get('admin/profile/edit','AdminController@editProfile');
Route::post('/admin/profile/update', array('before' => 'csrf', 'uses' => 'AdminController@updateProfile'));
// Customer
Route::get('/customer/profile', 'CustomerController@showProfile');
Route::get('customer/profile/edit','CustomerController@editProfile');
Route::post('/customer/profile/update', array('before' => 'csrf', 'uses' => 'CustomerController@updateProfile'));
<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;
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
    return view('welcome');
});

Auth::routes();

// ログイン中のユーザー情報
Auth::user();
 
// ログイン中のユーザーID
Auth::id();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'welcome'])->name('home');

Route::get('/continue', function () {
    return view('layouts.book.book');
});

Route::group(['prefix' => 'books', 'name' => 'book.'], function () {     
    Route::get('/', [BookController::class, 'index'])->name('index');    
    Route::get('/{book}', [BookController::class, 'show'])->name('show'); 
});
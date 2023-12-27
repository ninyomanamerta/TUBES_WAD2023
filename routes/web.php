<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::controller(BookController::class)->prefix('books')->group(function () {
    Route::get('', 'index')->name('books');
    Route::get('tambahbuku', 'create')->name('books.create');
    Route::post('store', 'store')->name('books.store');
    Route::get('detail/{id}', 'show')->name('books.show');

    });

//Rute Controller Sumbangan
Route::get('/Sumbang', 'App\Http\Controllers\SumbangController@create')->name('Sumbang.create');
Route::get('/Sumbang/show', 'App\Http\Controllers\SumbangController@show')->name('Sumbang.show');
Route::post('/Sumbang' , 'App\Http\Controllers\SumbangController@store')->name('Sumbang.store');
Route::get('/Sumbang/edit', 'App\Http\Controllers\SumbangController@edit')->name('Sumbang.edit');

<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;
use App\Http\Controllers\PinjamController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Auth::routes();

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::controller(BookController::class)->prefix('books')->group(function () {
    Route::get('', 'index')->name('books');
    Route::get('tambahbuku', 'create')->name('books.create');
    Route::post('store', 'store')->name('books.store');
    Route::get('detailbuku/{id}', 'show')->name('books.show');
    Route::get('editbuku/{id}', 'edit')->name('books.edit');
    Route::post('edit/{id}', 'update')->name('books.update');
    Route::post('hapusbuku/{id}', 'destroy')->name('books.destroy');

    });

//Rute Controller Sumbangan
Route::get('/Sumbang', 'App\Http\Controllers\SumbangController@create')->name('Sumbang.create');
Route::get('/Sumbang/show', 'App\Http\Controllers\SumbangController@show')->name('Sumbang.show');
Route::post('/Sumbang' , 'App\Http\Controllers\SumbangController@store')->name('Sumbang.store');
Route::get('/Sumbang/edit{id}', 'App\Http\Controllers\SumbangController@edit')->name('Sumbang.edit');
Route::put('/Sumbang/update/{id}', 'App\Http\Controllers\SumbangController@update')->name('Sumbang.update');
Route::delete('/Sumbang/delete/{id}', 'App\Http\Controllers\SumbangController@delete')->name('Sumbang.delete');


Route::controller(PinjamController::class)->prefix('peminjaman')->group(function () {
    Route::get('', 'index')->name('peminjaman');
    Route::post('store', 'store');
    Route::post('update', 'update');
    Route::get('delete/{id}', 'delete');
});

Route::controller(PengembalianController::class)->prefix('pengembalian')->group(function () {
    Route::get('', 'index')->name('pengembalian');
    Route::post('store', 'store');
    Route::post('update', 'update');
    Route::get('delete/{id}', 'delete');
});

Route::resource('/users', UserController::class);




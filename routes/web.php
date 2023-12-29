<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;
use App\Http\Controllers\PinjamController;

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

Route::controller(PinjamController::class)->prefix('pinjams')->group(function () {
    Route::get('', 'index')->name('pinjams');
    Route::post('store', 'store');
    Route::post('return', 'return');
    Route::post('update', 'update');
    Route::get('delete/{id}', 'delete');
});



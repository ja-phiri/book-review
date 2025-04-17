<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('books.index');
});



Route::resource('books', BookController::class)
    ->only(['index', 'show']);

Route::middleware('throttle:reviews')->post('/books/{book}/reviews', [ReviewController::class, 'store'])->name('books.reviews.store');

Route::resource('books.reviews', ReviewController::class)
    ->scoped(['review' => 'book'])
    ->only(['create']);

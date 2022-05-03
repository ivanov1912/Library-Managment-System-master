<?php
use App\Http\Controllers\Visitor\Book\BookController;
use Illuminate\Support\Facades\Route;

Route::prefix('books')->group(function () {
    Route::get('/book/{id}',[BookController::class,'show'])->name('show.book');
});

?>
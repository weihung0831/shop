<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerController;

Route::get('/', [BannerController::class, 'index'])->name('Home');

Route::get('/menu', function () {
    return view('menu');
})->name('Menu');

Route::get('/about', function () {
    return view('about');
})->name('About');

Route::get('/book', function () {
    return view('book');
})->name('Book');

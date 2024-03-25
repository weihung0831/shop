<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\MenuController;

Route::get('/', [BannerController::class, 'index'])->name('Home');

Route::get('/menu', [MenuController::class, 'index'])->name('Menu');

Route::get('/about', function () {
    return view('about');
})->name('About');

Route::get('/book', function () {
    return view('book');
})->name('Book');

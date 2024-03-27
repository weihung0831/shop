<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;

Route::get('/', [HomeController::class, 'index'])->name('Home');

Route::get('/menu', [MenuController::class, 'index'])->name('Menu');

Route::get('/about', function () {
    return view('about');
})->name('About');

Route::get('/book', function () {
    return view('book');
})->name('Book');

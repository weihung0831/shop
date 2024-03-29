<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BookController;

Route::get('/', [HomeController::class, 'index'])->name('Home');

Route::get('/menu', [MenuController::class, 'index'])->name('Menu');

Route::get('/about', [AboutController::class, 'index'])->name('About');

Route::get('/book', [BookController::class, 'index'])->name('Book');
Route::post('/book', [BookController::class, 'store'])->name('Book.store');

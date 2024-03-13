<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('Home');

Route::get('/menu', function () {
    return view('menu');
})->name('Menu');

Route::get('/about', function () {
    return view('about');
})->name('About');

Route::get('/book', function () {
    return view('book');
})->name('Book');

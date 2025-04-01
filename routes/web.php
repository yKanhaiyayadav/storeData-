<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/services', function () {
    return view('pages.serveces');
});

Route::get('/portfolio', function () {
    return view('pages.portfolio');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/register', function () {
    return view('pages.register');
});


Route::post('/formRegister', [userController::class, 'register'])->name('/formRegister');

Route::get('/login', function () {
    return view('pages.login');
});

Route::fallback(function () {
    return view('errorPage');
});

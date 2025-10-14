<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

//Главная страница
Route::get('/', function () {
    return view('welcome');
})->name('home');

// POST роуты для обработки
Route::controller(AuthController::class)->group(function () {
    Route::post('/register', 'register')->name('register.post');
    Route::post('/login', 'login')->name('login.post');
    Route::post('/logout', 'logout')->name('logout');
});

// Страница заметок
Route::get('/notes', function () {
    return view('notes');
})->name('notes');


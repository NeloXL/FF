<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

//Главная страница
Route::get('/', function () {
    return view('welcome');
})->name('home');

// POST роуты для обработки
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Страница заметок
Route::get('/notes', function () {
    return view('notes');
})->name('notes');

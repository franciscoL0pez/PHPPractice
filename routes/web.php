<?php

use App\Http\Controllers\BackOffice\UserController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
}
)->name('register');

Route::post('/login', [UserController::class, 'login'])->name('login.post');
Route::post('/register', [RegisterController::class, 'store'])->name('register.post');


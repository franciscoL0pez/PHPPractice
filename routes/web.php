<?php

use App\Http\Controllers\BackOffice\UserController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('app');
}) ->name('app');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/profile', function () {
    return view('profile.profile');
})->name('profile');

Route::get('/profile/edit', function () {
    return view('profile.edit_profile');
})->name('profile.edit');

Route::get('/messages', function () {
    return view('messages');
})->name('messages.index');




Route::post('/app', [LoginController::class, 'logOut'])->name('logout');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/profile', [ProfileController::class, 'profile'])->name('profile');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
Route::get('/messages', [MessageController::class])->name('messages.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.post');
Route::resource('messages', MessageController::class);


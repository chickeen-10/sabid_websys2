<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Registration Routes
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

// Login Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');

// Logout Route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard (Protected)
Route::middleware('auth')->get('/dashboard', function () {
    return view('auth.dashboard'); // Use 'auth.dashboard' if it's inside auth folder
})->name('dashboard');

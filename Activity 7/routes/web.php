<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalInfoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/personal-info', [PersonalInfoController::class, 'create'])->name('personal_info.create');
Route::post('/personal-info', [PersonalInfoController::class, 'store'])->name('personal_info.store');

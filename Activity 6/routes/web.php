<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/customer', [OrderController::class, 'customer']);
Route::get('/item', [OrderController::class, 'item']);
Route::get('/order', [OrderController::class, 'order']);
Route::get('/orderdetails', [OrderController::class, 'orderDetails']);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;

Route::get('/weather-view', [WeatherController::class, 'viewWeather']);

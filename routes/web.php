<?php

use App\Http\Controllers\ReadingController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', WelcomeController::class)->name('welcome');
Route::get('/current-reading', [ReadingController::class, 'current'])->name('readings.current_reading');
<?php

use App\Http\Controllers\ReadingController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', WelcomeController::class)->name('welcome');
Route::get('/readings/current', [ReadingController::class, 'current'])->name('readings.current');
Route::get('readings/upcoming', [ReadingController::class, 'upcoming'])->name('readings.upcoming');
Route::get('readings/upcoming/{book:slug}', [ReadingController::class, 'upcomingShow'])->name('readings.upcoming.show');
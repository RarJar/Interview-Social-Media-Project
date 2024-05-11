<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::controller(RegisteredUserController::class)->group(function () {
    Route::get('register','create')->name('register');
    Route::post('register','store');
    Route::get('login','login')->name('login');
    Route::post('login','store');
})->middleware('guest');

Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout')->middleware('auth');

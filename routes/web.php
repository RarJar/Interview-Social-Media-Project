<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;

Route::controller(IndexController::class)->group(function(){
    Route::get('/','index')->name('index');
});

Route::controller(PostController::class)->group(function(){
    Route::get('/post/create','create')->name('post.create');
    Route::post('/post/store','store')->name('post.store');
    Route::get('/post/edit/{post}','edit')->name('post.edit');
    Route::get('/post/{post:slug}', 'show')->name('post.show');
    Route::post('/post/update/{post}','update')->name('post.update');
    Route::get('/post/destroy/{post}', 'destroy')->name('post.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

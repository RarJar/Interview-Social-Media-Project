<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;

Route::controller(IndexController::class)->group(function(){
    Route::get('/','index')->name('index');
});

Route::resource('posts',PostController::class)->names([
    'create' => 'post.create',
    'store' => 'post.store',
    'show' => 'post.show',
    'edit' => 'post.edit',
    'update' => 'post.update',
    'destroy' => 'post.destroy',
]);

Route::controller(CommentController::class)->group(function(){
    Route::post('/comments/{post}/store','store')->name('comment.store');
    Route::put('/comments/{comment}/update','update')->name('comment.update');
    Route::delete('/comments/{comment}/destroy','destroy')->name('comment.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

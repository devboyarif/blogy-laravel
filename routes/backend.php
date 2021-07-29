<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('home');
    Route::view('categories', 'admin.category')->name('categories');
    Route::view('tags', 'admin.tag')->name('tags');
    Route::resource('posts', PostController::class);
    // Route::view('posts', 'admin.post')->name('posts');
    // Route::get('posts', [PostController::class, 'index'])->name('posts.index');
});

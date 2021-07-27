<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('home');
    Route::view('category', 'admin.category')->name('category');
    Route::view('tag', 'admin.tag')->name('tag');
});

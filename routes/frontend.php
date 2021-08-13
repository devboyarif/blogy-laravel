<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('register', function () {
    return redirect('login');
});
Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/posts', [FrontendController::class, 'posts'])->name('posts');
Route::get('/details/{post}', [FrontendController::class, 'details'])->name('details');

<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('register', function () {
    return redirect('login');
});
Auth::routes();

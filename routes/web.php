<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class,'showLoginForm']->name('login') {
    return view('login');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;



Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::get('/login',[LoginController::class,'index'])->name('login');

Route::get('/posts', function () {
    return view('posts.index');
});

<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;


Route::get('/',function(){
    return view('home');
})->name('home');

Route::get('/dashboard',[DashboardController::class,'index'])
->name('dashboard')
->middleware('auth');



//login-logout routes
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store']);
Route::post('/logout',[LogoutController::class,'store'])->name('logout');

//register routes
Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store']);


//posts routes
Route::get('/posts',[PostController::class,'index'])->name('posts');
Route::post('/posts',[PostController::class,'store']);
Auth::routes();

//posts likes
Route::post('/posts/{post}/likes',[PostLikeController::class,'store'])->name('posts.like');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

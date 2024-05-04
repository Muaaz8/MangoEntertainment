<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/stream', function () {
    return view('streaming.stream');
})->name('stream');

Route::get('/check', function () {
    return view('streaming.check');
})->name('stream');

Route::get('signup',[AuthController::class,'signup'])->name('signup');
Route::post('register',[AuthController::class,'register'])->name('register');

Route::get('signin',[AuthController::class,'signin'])->name('signin');
Route::post('login',[AuthController::class,'login'])->name('login');
Route::post('view_forget_password',[AuthController::class,'view_forget_password'])->name('view_forget_password');

Route::post('/logout', [AuthController::class,'logout'])->name('logout');

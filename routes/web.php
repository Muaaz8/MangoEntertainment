<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('signup',[AuthController::class,'signup'])->name('signup');
Route::post('register',[AuthController::class,'register'])->name('register');

Route::get('signin',[AuthController::class,'signin'])->name('signin');
Route::post('login',[AuthController::class,'login'])->name('login');

Route::post('/logout', [AuthController::class,'logout'])->name('logout');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LiveStreamController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/my-profile', [ProfileController::class,'my_profile']);


// Route::get('/stream', function () {
//     return view('Streaming.stream');
// })->name('stream1');

// Route::get('/check', function () {
//     return view('Streaming.check');
// })->name('stream2');

Route::get('/stream',[LiveStreamController::class,'stream'])->name('stream');
Route::get('/joinStream',[LiveStreamController::class,'joinStream'])->name('joinStream');
Route::get('/join-stream/{room_id}',[LiveStreamController::class,'join_stream'])->name('join_stream');

Route::get('signup',[AuthController::class,'signup'])->name('signup');
Route::post('register',[AuthController::class,'register'])->name('register');

Route::get('signin',[AuthController::class,'signin'])->name('signin');
Route::post('login',[AuthController::class,'login'])->name('login');
Route::post('view_forget_password',[AuthController::class,'view_forget_password'])->name('view_forget_password');

Route::post('/logout', [AuthController::class,'logout'])->name('logout');

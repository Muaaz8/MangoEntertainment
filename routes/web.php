<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LiveStreamController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GeneralController;
use ZEGO\ZegoServerAssistant;
use Parse\ParseQuery;

// Route::get('/token', function () {
//     //return view('welcome');

//         $appId = 1101904631;
//         $serverSecret = '3131e55d1d7505c2655a85258bce52df';
//         $userId = 'TEST';
//         $expire = 3600; // 1 hour

//         $token = ZegoServerAssistant::generateToken04($appId, $userId, $serverSecret, $expire, '');
//         //ZegoServerAssistant::generateToken04()
//         var_dump($token->token);
//         die;

// })->name('tok');
// Route::get('/stream', function () {
//     return view('Streaming.stream');
// })->name('stream1');

// Route::get('/check', function () {
//     return view('Streaming.check');
// })->name('stream2');
// Route::get('/joinStream',[LiveStreamController::class,'joinStream'])->name('joinStream');

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', [GeneralController::class, 'dashboard'])->name('dashboard');
Route::get('/hashtags', [GeneralController::class, 'hashtags'])->name('hashtags');
Route::get('/users', [GeneralController::class, 'users'])->name('users');
Route::get('/gifts', [GeneralController::class, 'gifts'])->name('gifts');

Route::post('insert/hashtags',[GeneralController::class, 'insert_hashtags'])->name('insert_hashtags');
Route::delete('delete/hashtags/{id}',[GeneralController::class, 'delete_hashtag'])->name('delete_hashtag');
Route::get('edit/hashtags/{id}',[GeneralController::class, 'edit_hashtag'])->name('edit_hashtag');
Route::post('update/hashtags/{id}',[GeneralController::class, 'update_hashtag'])->name('update_hashtag');

Route::get('/stream-list', [LiveStreamController::class,'stream_list']);
Route::get('/my-profile', [ProfileController::class,'my_profile']);

Route::get('/stream',[LiveStreamController::class,'stream'])->name('stream');
Route::get('/joinStream/{room_id}',[LiveStreamController::class,'joinStream'])->name('joinStream');

Route::get('signup',[AuthController::class,'signup'])->name('signup');
Route::post('register',[AuthController::class,'register'])->name('register');

Route::get('signin',[AuthController::class,'signin'])->name('signin');
Route::post('login',[AuthController::class,'login'])->name('login');
Route::post('view_forget_password',[AuthController::class,'view_forget_password'])->name('view_forget_password');

Route::get('privacy-policy', function(){
    return view('privacy-policy');
});
Route::get('terms-and-conditions', function(){
    return view('term-and-condition');
});

Route::post('/logout', [AuthController::class,'logout'])->name('logout');

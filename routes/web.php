<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\CustomUserController;
use App\Http\controllers\AuthController;

Route::get('/', function () {
    return view('login');
})->name('loginroute');
Route::get('/register', function () {
    return view('register'); //register.blade.php
})->name('registerroute');

Route::resource('user',CustomUserController::class);

Route::post('login',[AuthController::class,'login']);

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

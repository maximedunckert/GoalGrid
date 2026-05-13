<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorldCupController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


Route::prefix('worldcup')->group(function () {
    Route::get('/matches',   [WorldCupController::class, 'matches']);
    Route::get('/standings', [WorldCupController::class, 'standings']);
});

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'login'])->name('login.post');

Route::get('/register', [RegisterController::class,'register'])->name('register');
Route::post('/register', [RegisterController::class,'registerUser'])->name('register.post');
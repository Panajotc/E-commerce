<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\SignupController;
use App\Http\Controllers\HomefirstController;
use App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Route;



Route::get('/',[HomefirstController::class,'index'])->name('homefirst');

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store']);

Route::get('/logout',[LogoutController::class,'store'])->name('logout');

Route::get('/signup',[SignupController::class,'index'])->name('signup');
Route::post('/signup',[SignupController::class,'store']);

Route::get('/upload',[ProductController::class,'index'])->name('upload');
Route::post('/upload',[ProductController::class,'store']);





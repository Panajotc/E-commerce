<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\HomefirstController;
use Illuminate\Support\Facades\Route;



Route::get('/',[HomefirstController::class,'index'])->name('homefirst');

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store']);


Route::get('/signup',[SignupController::class,'index'])->name('signup');
Route::post('/signup',[SignupController::class,'store']);








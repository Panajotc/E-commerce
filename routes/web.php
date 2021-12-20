<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('pages/homefirst');
});

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::get('/signup',[SignupController::class,'index'])->name('signup');








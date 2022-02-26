<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['user.auth']],function () {
    Route::get('/', function () {
        return 2+2;
    });
    Route::get('login', [\App\Http\Controllers\Login::class,'index'])->name('login');
    Route::post('loginPost', [\App\Http\Controllers\Login::class,'loginPost'])->name('login.post');
    Route::get('register', [\App\Http\Controllers\Register::class,'index'])->name('register');
    Route::post('registerPost', [\App\Http\Controllers\Register::class,'registerPost'])->name('register.post');
    Route::get('forgotPassword', [\App\Http\Controllers\ForgotPassword::class,'index'])->name('forgot.password');
    Route::post('forgotPasswordPost', [\App\Http\Controllers\ForgotPassword::class,'forgotPasswordPost'])->name('forgot.password.post');
});


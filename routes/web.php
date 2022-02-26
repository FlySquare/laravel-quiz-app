<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['user.auth']],function () {
    Route::get('/', function () {
        return 2+2;
    });
    Route::get('login', [\App\Http\Controllers\Login::class,'index'])->name('login');
    Route::get('register', [\App\Http\Controllers\Register::class,'index'])->name('register');
    Route::get('forgotPassword', [\App\Http\Controllers\ForgotPassword::class,'index'])->name('forgot.password');
});


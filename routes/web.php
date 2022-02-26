<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['user.auth']],function () {
    Route::get('/', [\App\Http\Controllers\Index::class,'index'])->name('index');
    Route::get('quizzes', [\App\Http\Controllers\Quizzes::class,'index'])->name('quizzes');
    Route::get('profile', [\App\Http\Controllers\Profile::class,'index'])->name('profile');
    Route::get('logout', [\App\Http\Controllers\Index::class,'logout'])->name('logout');
    Route::get('login', [\App\Http\Controllers\Login::class,'index'])->name('login');
    Route::post('loginPost', [\App\Http\Controllers\Login::class,'loginPost'])->name('login.post');
    Route::get('register', [\App\Http\Controllers\Register::class,'index'])->name('register');
    Route::post('registerPost', [\App\Http\Controllers\Register::class,'registerPost'])->name('register.post');
    Route::get('forgotPassword', [\App\Http\Controllers\ForgotPassword::class,'index'])->name('forgot.password');
    Route::get('changePassword', [\App\Http\Controllers\Profile::class,'changePassword'])->name('change.password');
    Route::post('changePasswordPost', [\App\Http\Controllers\Profile::class,'changePasswordPost'])->name('change.password.post');
    Route::post('forgotPasswordPost', [\App\Http\Controllers\ForgotPassword::class,'forgotPasswordPost'])->name('forgot.password.post');
});


<?php

use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrationController;

Route::get('registration', [RegistrationController::class, 'index'])->middleware('guest')->name('registration.index');
Route::post('registration', [RegistrationController::class, 'store'])->middleware('guest')->name('registration.store');


Route::post('connection', [LoginController::class, 'login'])->middleware('guest')->name('connection');
Route::get('connection', [LoginController::class, 'index'])->middleware('guest')->name('connection.index');
Route::get('logout', [LoginController::class, 'logout'])->middleware('auth', 'member')->name('logout.index');
Route::get('forgot-password', [ForgotPasswordController::class, 'show'])->middleware('guest')->name('forgot.show');
Route::post('forgot-password/send', [ForgotPasswordController::class, 'send'])->middleware('guest')->name('forgot.send');
Route::get('password-reset/{token}', [ForgotPasswordController::class, 'reset'])->middleware('guest')->name('password.reset');
Route::post('password-reset', [ForgotPasswordController::class, 'update'])->middleware('guest')->name('password.update');

//enlever le member si je veux que le banni puisse modifier le profil
Route::get('profile', [ProfileController::class, 'index'])->middleware('auth', 'member')->name('profile.index');
Route::post('profile', [ProfileController::class, 'update'])->middleware('auth', 'member')->name('profile.update');
Route::post('profile/update-password', [ProfileController::class, 'password'])->middleware('auth', 'member')->name('profile.password.update');

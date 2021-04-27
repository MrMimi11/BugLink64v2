<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('buglink64', [HomeController::class, 'index'])->name('buglink64.index');

Route::get('contact', [ContactController::class, 'create'])->name('contact.create');

Route::get('login', [LoginController::class, 'create'])->name('login.create');

Route::get('post', [PostController::class, 'create']);

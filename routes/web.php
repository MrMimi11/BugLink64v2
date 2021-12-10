<?php

use App\Http\Controllers\BugController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SpeedrunController;
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

Route::get('', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [HomeController::class, 'show'])->name('home.show');

Route::get('contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('{game:slug}', [BugController::class, 'index'])->name('games.bugs.index');
Route::get('{game:slug}/bugs/search', [BugController::class, 'search'])->name('games.bugs.search');

Route::post('{game:slug}/bugs', [BugController::class, 'store'])->middleware('auth', 'member')->name('games.bugs.store');
Route::get('{game:slug}/bugs/create', [BugController::class, 'create'])->middleware('auth', 'member')->name('games.bugs.create');
Route::post('{game:slug}/bugs/{bug:slug}', [BugController::class, 'update'])->middleware('auth', 'member')->name('games.bugs.update');
Route::get('{game:slug}/bugs/{bug:slug}', [BugController::class, 'show'])->name('games.bugs.show');
Route::get('{game:slug}/bugs/{bug:slug}/edit', [BugController::class, 'edit'])->middleware('auth', 'member')->name('games.bugs.edit');
Route::get('{game:slug}/bugs/{bug:slug}/delete', [BugController::class, 'destroy'])->middleware('auth', 'member')->name('games.bugs.delete');

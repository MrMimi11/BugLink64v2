<?php

use App\Http\Controllers\BugController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
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

Route::get('registration', [RegistrationController::class, 'index'])->name('registration.index');
Route::post('', [RegistrationController::class, 'store'])->name('registration.store');


Route::post('connection', [LoginController::class, 'login'])->name('connection');
Route::get('connection', [LoginController::class, 'index'])->middleware('guest')->name('connection.index');
Route::get('logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout.index');

Route::get('contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('ocarina-of-time', [HomeController::class, 'ocarina'])->name('ocarina');
Route::get('majora-s-mask', [HomeController::class, 'majora'])->name('majora');

Route::get('{game:slug}/bugs', [BugController::class, 'index'])->name('games.bugs.index');
Route::post('{game:slug}/bugs', [BugController::class, 'store'])->name('games.bugs.store');
Route::get('{game:slug}/bugs/create', [BugController::class, 'create'])->name('games.bugs.create');
Route::get('{game:slug}/bugs/search', [BugController::class, 'search'])->name('games.bugs.search');
Route::post('{game:slug}/bugs/{bug:slug}', [BugController::class, 'update'])->name('games.bugs.update');
Route::get('{game:slug}/bugs/{bug:slug}', [BugController::class, 'show'])->name('games.bugs.show');
Route::get('{game:slug}/bugs/{bug:slug}/edit', [BugController::class, 'edit'])->name('games.bugs.edit');
Route::get('{game:slug}/bugs/{bug:slug}/delete', [BugController::class, 'destroy'])->name('games.bugs.delete');

//Route::get('games', [GameController::class, 'index'])->name('games.index');
//Route::get('{game:slug}', [GameController::class, 'show'])->name('games.show');
//Route::get('{game:slug}/edit', [GameController::class, 'edit'])->name('games.edit');
//Route::get('{game:slug}/destroy', [GameController::class, 'destroy'])->name('games.destroy');
Route::get('{game:slug}/speedruns', [SpeedrunController::class, 'index'])->name('games.speedruns.index');

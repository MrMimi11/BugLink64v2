<?php

use App\Http\Controllers\Admin\BugController as AdminBugController;
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

Route::get('registration', [RegistrationController::class, 'index'])->middleware('guest')->name('registration.index');
Route::post('registration', [RegistrationController::class, 'store'])->middleware('guest')->name('registration.store');

Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin', [AdminBugController::class, 'index'])->name('admin.bugs.index');
    Route::get('/admin/{bug:slug}', [AdminBugController::class, 'show'])->name('admin.bugs.show');
    Route::post('/admin/{bug:slug}/update', [AdminBugController::class, 'update'])->name('admin.bugs.update');
});

Route::post('connection', [LoginController::class, 'login'])->middleware('guest')->name('connection');
Route::get('connection', [LoginController::class, 'index'])->middleware('guest')->name('connection.index');
Route::get('logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout.index');

Route::get('contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('{game:slug}', [BugController::class, 'index'])->name('games.bugs.index');
Route::get('{game:slug}/bugs/search', [BugController::class, 'search'])->name('games.bugs.search');

Route::post('{game:slug}/bugs', [BugController::class, 'store'])->middleware('auth')->name('games.bugs.store');
Route::get('{game:slug}/bugs/create', [BugController::class, 'create'])->middleware('auth')->name('games.bugs.create');
Route::post('{game:slug}/bugs/{bug:slug}', [BugController::class, 'update'])->middleware('auth')->name('games.bugs.update');
Route::get('{game:slug}/bugs/{bug:slug}', [BugController::class, 'show'])->name('games.bugs.show');
Route::get('{game:slug}/bugs/{bug:slug}/edit', [BugController::class, 'edit'])->middleware('auth')->name('games.bugs.edit');
Route::get('{game:slug}/bugs/{bug:slug}/delete', [BugController::class, 'destroy'])->middleware('auth')->name('games.bugs.delete');
//Route::get('games', [GameController::class, 'index'])->name('games.index');
//Route::get('{game:slug}', [GameController::class, 'show'])->name('games.show');
//Route::get('{game:slug}/edit', [GameController::class, 'edit'])->name('games.edit');
//Route::get('{game:slug}/destroy', [GameController::class, 'destroy'])->name('games.destroy');
Route::get('{game:slug}/speedruns', [SpeedrunController::class, 'index'])->name('games.speedruns.index');

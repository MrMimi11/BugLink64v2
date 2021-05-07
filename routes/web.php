<?php

use App\Http\Controllers\BugController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', [HomeController::class, 'index'])->name('home.index');

Route::get('contact', [ContactController::class, 'create'])->name('contact.create');
Route::get('login', [LoginController::class, 'create'])->name('login.create');

Route::get('home/games', [GameController::class, 'index'])->name('games.index');
Route::get('home/games/{game:slug}', [GameController::class, 'show'])->name('games.show');
Route::get('home/games/{game:slug}/edit', [GameController::class, 'edit'])->name('games.edit');
Route::get('home/games/{game:slug}/destroy', [GameController::class, 'destroy'])->name('games.destroy');

Route::get('home/games/{game:slug}/bugs', [BugController::class, 'index'])->name('games.bugs.index');
Route::get('home/games/{game:slug}/bugs/create', [BugController::class, 'create'])->name('games.bugs.create');
Route::post('home/games/{game:slug}/bugs', [BugController::class, 'store'])->name('games.bugs.store');
Route::get('home/games/{game:slug}/bugs/search', [BugController::class, 'search'])->name('games.bugs.search');
Route::post('home/games/{game:slug}/bugs/{bug:slug}', [BugController::class, 'update'])->name('games.bugs.update');
Route::get('home/games/{game:slug}/bugs/{bug:slug}', [BugController::class, 'show'])->name('games.bugs.show');
Route::get('home/games/{game:slug}/bugs/{bug:slug}/edit', [BugController::class, 'edit'])->name('games.bugs.edit');
Route::get('home/games/{game:slug}/bugs/{bug:slug}/delete', [BugController::class, 'destroy'])->name('games.bugs.delete');

Route::get('home/games/{game:slug}/speedruns', [SpeedrunController::class, 'index'])->name('games.speedruns.index');

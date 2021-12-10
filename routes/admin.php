<?php

use App\Http\Controllers\Admin\BugController as AdminBugController;
use App\Http\Controllers\Admin\UserController;

Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    Route::get('/', [AdminBugController::class, 'index'])->name('admin.bugs');
    Route::get('/bugs', [AdminBugController::class, 'index'])->name('admin.bugs.index');

    Route::get('/bugs/{bug:slug}', [AdminBugController::class, 'show'])->name('admin.bugs.show');
    Route::post('/bugs/{bug:slug}/update', [AdminBugController::class, 'update'])->name('admin.bugs.update');
    Route::get('/bugs/{bug:slug}/delete', [AdminBugController::class, 'destroy'])->name('admin.bugs.destroy');

    Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('/users/{user:id}/ban', [UserController::class, 'ban'])->name('admin.users.ban');
    Route::get('/users/{user:id}/unban', [UserController::class, 'unban'])->name('admin.users.unban');
});

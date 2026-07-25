<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\UserController;
use Illuminate\Auth\Events\Authenticated;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('calendar', CalendarController::class);



Route::middleware(['auth'])->group(function () {

    Route::middleware('role:admin')->prefix('layouts')->group(function () {
        Route::get('/admin_layout', [AdminController::class,'index'])->name('admin.layout');
        Route::get('/user_layout', [UserController::class,'index'])->name('users.allUsers');
    });

    Route::middleware('role:user,moderator,admin')->group(function () {
        Route::resource('users', UserController::class);
    });

    Route::post('/logout', [AuthenticatedSessionController::class,'destroy'])->name('logout');

    Route::prefix('users')->group(function () {
        Route::get('/create', [UserController::class,'create'])->name('users.create');
        Route::post('/', [UserController::class,'store'])->name('users.store');
        Route::put('/{id}', [UserController::class, 'update']);
        Route::delete('/{id}', [UserController::class, 'destroy']);
    });
});

require __DIR__ . '/auth.php';

// Route::prefix('layouts')->group(function () {
//     Route::get('/admin_layout', [AdminController::class,'index'])->name('admin.layout');
//     Route::get('/user_layout', [UserController::class,'index'])->name('users.allUsers');
// });
// Route::prefix('users')->group(function () {
//     Route::get('/create', [UserController::class,'create'])->name('users.create');
//     Route::post('/', [UserController::class,'store'])->name('users.store');
//     Route::put('/{id}', [UserController::class, 'update']);
//     Route::delete('/{id}', [UserController::class, 'destroy']);
// });

// Route::middleware(['auth','role:admin,moderator'])->group(function () {
//     Route::delete('users/{id}', [UserController::class,'destroy']);
//     Route::post('/events', [AdminController::class, 'store']);
// });

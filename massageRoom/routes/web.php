<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalendarController;

Route::get('/', function () {
    return view('home');
})->name('home');
//Calendar Routes
Route::get('/calendar/index', [CalendarController::class, 'index'])->name('calendar.index');
Route::post('/calendar/index', [CalendarController::class, 'store'])->name('calendar.store');

//Geolocation routes



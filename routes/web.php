<?php

use App\Http\Controllers\DashController;
use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/dashboard', [DashController::class, 'index'])->middleware('auth')->name('dashboard');


Route::view('/admin-dashboard', 'adminDashboard')->middleware('auth')->name('admin-dashboard');

Route::get('/', [HomeController::class, 'index']);

Route::resource('/games', GameController::class)->middleware('auth');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('home');
// });

Route::view('/dashboard', 'dashboard')->middleware('auth')->name('dashboard');

Route::view('/admin-dashboard', 'adminDashboard')->middleware('auth')->name('admin-dashboard');

Route::get('/', [HomeController::class, 'index']);

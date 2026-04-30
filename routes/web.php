<?php

use App\Http\Controllers\DashController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/dashboard', [DashController::class, 'index'])->middleware('auth')->name('dashboard');

Route::view('/admin-dashboard', 'adminDashboard')->middleware('auth')->name('admin-dashboard');

Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', function () {
    $games = \App\Models\Game::all();
    return view('dashboard', ['games' => $games]);
})->middleware('auth')->name('dashboard');

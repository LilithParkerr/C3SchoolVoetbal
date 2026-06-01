<?php

use App\Http\Controllers\DashController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\GenerateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamsController;
use Database\Seeders\GameSeeder;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/dashboard', [DashController::class, 'index'])->middleware('auth')->name('dashboard');


Route::get('/admin-dashboard', [DashController::class, 'adminIndex'])->middleware('auth')->name('admin-dashboard');

Route::get('/', [HomeController::class, 'index']);

Route::post('/game/seed', [GenerateController::class, 'seed'])->name('games.seed');

Route::resource('/games', GameController::class)->middleware('auth');
Route::resource('/teams',TeamsController::class);

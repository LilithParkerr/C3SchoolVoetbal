<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::view('/dashboard', 'dashboard')->middleware('auth')->name('dashboard');

Route::view('/admin-dashboard', 'adminDashboard')->middleware('auth')->name('admin-dashboard');

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::view('/dashboard', 'dashboard')->middleware('auth')->name('dashboard');

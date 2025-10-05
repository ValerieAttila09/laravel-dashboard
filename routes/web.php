<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['page' => 'Login']);
});

Route::get('/dashboard', function () {
    return view('dashboard', ['page' => 'Dashboard']);
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::resource('users', UserController::class);

Route::get('/', function () {
    return view('entry', ['page' => 'Login']);
});
Route::get('/signup', function () {
    return view('signup', ['page' => 'signup']);
});

Route::get('/dashboard', [UserController::class, 'index']);

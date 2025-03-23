<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authcontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [Authcontroller::class, 'showLoginForm'])->name('login');
Route::post('/login', [Authcontroller::class, 'login']);

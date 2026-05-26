<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});


# 1. Simple Routing
Route::get('/login', function (){
    return view('auth.login');
})->name('view.login');

Route::get('/register', function (){
    return view('auth.register');
})->name('view.register');

# 2. Controller routing
Route::get('/home', [HomeController::class, 'index'])->name('view.home');













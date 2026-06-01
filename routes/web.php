<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});


# --------------- 0. Redirect ---------------
Route::redirect('/contact-us', 'hubungi-kami');

# --------------- 1. Simple Routing ---------------
Route::get('/login', function (){
    return view('auth.login');
})->name('view.login');

Route::get('/register', function (){
    return view('auth.register');
})->name('view.register');

# --------------- 2. Controller Routing ---------------
Route::get('/home', [HomeController::class, 'index'])->name('view.home');



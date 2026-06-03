<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StocksController;


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


# --------------- 3. Group of Router ---------------
Route::prefix('stocks')->name('stocks.')->group(function(){
    Route::get('/', [StocksController::class, 'index'])->name('index');
    Route::get('/portofolio', [StocksController::class, 'portofolio'])->name('portofolio');
    Route::get('/orders', [StocksController::class, 'orders'])->name('orders');
    Route::get('/{ticker}', [StocksController::class, 'detail'])->name('detail');
    Route::post('/orders', [StocksController::class, 'buy'])->name('store');
});
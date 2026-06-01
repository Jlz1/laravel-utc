<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StocksController extends Controller
{
    public function index(){
        return view('stocks.stocks_index');
    }

    public function portofolio(){
        return view('stocks.portofolio');
    }

    public function orders(){
        return view('stocks.orders');
    }
}

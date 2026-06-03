<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StocksModel;

class StocksController extends Controller
{
    public function index(){
        return view('stocks.stocks_index');
    }

    public function portofolio(){
        $stocks = StocksModel::get();

        return view('stocks.portofolio', compact('stocks'));
    }

    public function orders(){
        return view('stocks.orders');
    }
}

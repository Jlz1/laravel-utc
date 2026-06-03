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

    public function detail($ticker){
        $stock = StocksModel::findTicker($ticker);

        return view('stocks.detail', compact('stock'));       
    }

    public function orders(){
        return view('stocks.orders');
    }

    public function buy(Request $request){
        dd($request->all());
    }
}

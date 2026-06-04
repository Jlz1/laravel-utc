<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;

class StocksController extends Controller
{
    public function index(){
        return view('stocks.stocks_index');
    }

    public function portofolio(){
        $stocks = Stock::all();

        return view('stocks.portofolio', compact('stocks'));
    }

    public function detail($ticker){
        $stock = Stock::where('ticker', $ticker)->first();

        if(!$stock){
            abort(404);
        }

        return view('stocks.detail', compact('stock'));       
    }

    public function orders(){
        return view('stocks.orders');
    }

    public function buy(Request $request){
        $stock = Stock::create([
            'ticker' => $request->ticker,
            'average' => $request->average,
            'price' => $request->average * 1.5
        ]);

        $stock->transaction()->create([
            'average' => $request->average,
            'price' => $request->average,
        ]);

        return redirect()->route('stocks.portofolio');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StocksModel extends Model
{
    public static function get(){
        return[
            [
                'id' => '1',
                'ticker' => 'AAAA',
                'average' => 1000,
                'price' => 1500,
            ],
            [
                'id' => '2',
                'ticker' => 'BBBB',
                'average' => 500,
                'price' => 300,
            ]
        ];
    }

    public static function findTicker($ticker){
        $stocks = self::get();

        foreach($stocks as $stock){
            if ($stock['ticker'] == $ticker){
                return $stock;
            }
        }

        return null;
    }
}

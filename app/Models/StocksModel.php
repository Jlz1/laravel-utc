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
            ],
            [
                'id' => '2',
                'ticker' => 'BBBB',
                'average' => 500,
            ]
        ];
    }
}

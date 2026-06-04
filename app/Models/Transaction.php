<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['stock_id', 'average', 'price']; 

    public function stock(){
        return $this->belongsTo(Stock::class);
    }
}

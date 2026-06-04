<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = ['ticker', 'average', 'price'];

    public function transaction(){
        return $this->hasMany(Transaction::class);
    }
}

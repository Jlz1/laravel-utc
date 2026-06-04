<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Stock;


class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Stock::create()->create([
            'ticker' => 'AAAA',
            'average' => 100,
            'price' => 150,
        ]);

        Stock::create()->create([
            'ticker' => 'BBBB',
            'average' => 1000,
            'price' => 900,
        ]);

        Stock::create()->create([
            'ticker' => 'CCCC',
            'average' => 15,
            'price' => 17,
        ]);

    }
}

<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create(['title' => 'Bunga Mawar',
        'description' => 'Bunga flanel mawar merah',
        'price' => 50000, 
        'stock' => 10 ]);

        Product::create(['title' => 'Bunga Mawar',
        'description' => 'Bunga flanel mawar putih',
        'price' => 50000, 
        'stock' => 5 ]);

        //
    }
}

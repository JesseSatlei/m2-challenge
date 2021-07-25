<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;


class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [];
        for ($i=0; $i <= 5; $i++) { 
            $discount_id = rand(1, 5);
            $name = 'Produto ' . $i;
            $products[] = ['name' => $name, 'discount_id' => $discount_id];
        }

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
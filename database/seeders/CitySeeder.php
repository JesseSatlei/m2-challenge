<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;


class CitySeeder extends Seeder
{
    public function run()
    {
        $products = [];
        for ($i=0; $i <= 5; $i++) { 
            $group_id = rand(1, 5);
            $name = 'City ' . $i;
            $products[] = ['name' => $name, 'group_id' => $group_id];
        }

        foreach ($products as $product) {
            City::create($product);
        }
    }
}
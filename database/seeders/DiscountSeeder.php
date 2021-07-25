<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Discount;


class DiscountSeeder extends Seeder
{
    public function run()
    {
        $discounts = [];
        for ($i=0; $i <= 5; $i++) { 
            $price = rand(0, 1000);
            $discounts[] = ['price_discount' => $price];
        }

        foreach ($discounts as $discount) {
            Discount::create($discount);
        }
    }
}
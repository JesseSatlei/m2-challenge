<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Campaign;


class CampaignSeeder extends Seeder
{
    public function run()
    {
        $campaigns = [];
        for ($i=0; $i <= 5; $i++) { 
            $name = 'Campanha ' . $i;
            $campaigns[] = ['name' => $name];
        }

        foreach ($campaigns as $campaign) {
            Campaign::create($campaign);
        }
    }
}
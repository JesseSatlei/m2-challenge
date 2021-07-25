<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Group;


class GroupSeeder extends Seeder
{
    public function run()
    {
        $groups = [];
        for ($i=0; $i <= 5; $i++) { 
            $name = 'Grupo ' . $i;
            $campaign_id = rand(1, 5);
            $groups[] = ['name' => $name, 'campaign_id' => $campaign_id];
        }

        foreach ($groups as $group) {
            Group::create($group);
        }
    }
}
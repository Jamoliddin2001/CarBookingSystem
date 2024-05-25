<?php

namespace Database\Seeders;

use App\Models\Drivers;
use Illuminate\Database\Seeder;

class DriversSeeder extends Seeder
{
    public function run()
    {
        Drivers::factory()
            ->count(10)
            ->create();
    }
}

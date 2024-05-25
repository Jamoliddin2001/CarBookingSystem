<?php

namespace Database\Seeders;

use App\Models\Cars;
use App\Models\Drivers;
use Illuminate\Database\Seeder;

class CarsSeeder extends Seeder
{
    public function run()
    {
        $drivers = Drivers::all();

        foreach ($drivers as $driver)
        {
            Cars::factory()->create([
                'driver_id' => $driver->id,
            ]);
        }
    }
}

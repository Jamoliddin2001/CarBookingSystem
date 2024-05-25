<?php

namespace Database\Seeders;

use App\Models\CarCategories;
use Illuminate\Database\Seeder;

class CarCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CarCategories::firstOrCreate([
            'id' => 1,
            'name' => 'Economy'
        ]);

        CarCategories::firstOrCreate([
            'id' => 2,
            'name' => 'Compact'
        ]);

        CarCategories::firstOrCreate([
            'id' => 3,
            'name' => 'Midsize'
        ]);

        CarCategories::firstOrCreate([
            'id' => 4,
            'name' => 'Fullsize'
        ]);

        CarCategories::firstOrCreate([
            'id' => 5,
            'name' => 'Luxury'
        ]);

        CarCategories::firstOrCreate([
            'id' => 6,
            'name' => 'SUV'
        ]);

        CarCategories::firstOrCreate([
            'id' => 7,
            'name' => 'Minivan'
        ]);

        CarCategories::firstOrCreate([
            'id' => 8,
            'name' => 'Convertible'
        ]);

        CarCategories::firstOrCreate([
            'id' => 9,
            'name' => 'Sports Car'
        ]);

        CarCategories::firstOrCreate([
            'id' => 10,
            'name' => 'Pickup Truck'
        ]);
    }
}

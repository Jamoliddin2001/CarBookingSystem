<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RolesTableSeeder::class);
        $this->call(CarCategoriesTableSeeder::class);
        $this->call(RoleCarsCategoryTableSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(DriversSeeder::class);
        $this->call(RoleUserSeeder::class);
        $this->call(CarsSeeder::class);
    }
}

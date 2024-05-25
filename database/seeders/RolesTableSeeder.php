<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::firstOrCreate([
            'id' => 1,
            'name' => 'CEO',
            'slug' => 'ceo',
            'description' => 'Chief executive officer',
            'level' => 1
        ]);

        Role::firstOrCreate([
            'id' => 2,
            'name' => 'CFO',
            'slug' => 'cfo',
            'description' => 'Chief financial officer',
            'level' => 2
        ]);

        Role::firstOrCreate([
            'id' => 3,
            'name' => 'COO',
            'slug' => 'coo',
            'description' => 'Chief operations officer',
            'level' => 3
        ]);

        Role::firstOrCreate([
            'id' => 4,
            'name' => 'CTO',
            'slug' => 'cto',
            'description' => 'Chief technical officer',
            'level' => 4
        ]);

        Role::firstOrCreate([
            'id' => 5,
            'name' => 'Manager',
            'slug' => 'manager',
            'description' => 'Manager',
            'level' => 5
        ]);

        Role::firstOrCreate([
            'id' => 6,
            'name' => 'Team Lead',
            'slug' => 'team_lead',
            'description' => 'Team Lead',
            'level' => 6
        ]);

        Role::firstOrCreate([
            'id' => 7,
            'name' => 'Developer',
            'slug' => 'developer',
            'description' => 'Software engineer',
            'level' => 7
        ]);

        Role::firstOrCreate([
            'id' => 8,
            'name' => 'Business analyst',
            'slug' => 'business_analyst',
            'description' => 'Business analyst',
            'level' => 8
        ]);
    }
}

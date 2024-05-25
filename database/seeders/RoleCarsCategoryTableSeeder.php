<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleCarsCategoryTableSeeder extends Seeder
{
    public function run()
    {
        $roleCarCategories = [
            // CEO
            ['role_id' => 1, 'category_id' => 1],
            ['role_id' => 1, 'category_id' => 2],
            ['role_id' => 1, 'category_id' => 3],
            ['role_id' => 1, 'category_id' => 4],
            ['role_id' => 1, 'category_id' => 5],
            ['role_id' => 1, 'category_id' => 6],
            ['role_id' => 1, 'category_id' => 7],
            ['role_id' => 1, 'category_id' => 8],
            ['role_id' => 1, 'category_id' => 9],
            ['role_id' => 1, 'category_id' => 10],

            // CFO
            ['role_id' => 2, 'category_id' => 1],
            ['role_id' => 2, 'category_id' => 2],
            ['role_id' => 2, 'category_id' => 3],
            ['role_id' => 2, 'category_id' => 4],
            ['role_id' => 2, 'category_id' => 5],
            ['role_id' => 2, 'category_id' => 6],
            ['role_id' => 2, 'category_id' => 7],
            ['role_id' => 2, 'category_id' => 8],
            ['role_id' => 2, 'category_id' => 9],
            ['role_id' => 2, 'category_id' => 10],

            // COO
            ['role_id' => 3, 'category_id' => 1],
            ['role_id' => 3, 'category_id' => 2],
            ['role_id' => 3, 'category_id' => 3],
            ['role_id' => 3, 'category_id' => 4],
            ['role_id' => 3, 'category_id' => 5],
            ['role_id' => 3, 'category_id' => 6],
            ['role_id' => 3, 'category_id' => 7],
            ['role_id' => 3, 'category_id' => 8],
            ['role_id' => 3, 'category_id' => 9],
            ['role_id' => 3, 'category_id' => 10],

            // CTO
            ['role_id' => 4, 'category_id' => 1],
            ['role_id' => 4, 'category_id' => 2],
            ['role_id' => 4, 'category_id' => 3],
            ['role_id' => 4, 'category_id' => 4],
            ['role_id' => 4, 'category_id' => 5],
            ['role_id' => 4, 'category_id' => 6],
            ['role_id' => 4, 'category_id' => 7],
            ['role_id' => 4, 'category_id' => 8],
            ['role_id' => 4, 'category_id' => 9],
            ['role_id' => 4, 'category_id' => 10],

            // Manager
            ['role_id' => 5, 'category_id' => 3],
            ['role_id' => 5, 'category_id' => 4],
            ['role_id' => 5, 'category_id' => 5],
            ['role_id' => 5, 'category_id' => 6],
            ['role_id' => 5, 'category_id' => 7],
            ['role_id' => 5, 'category_id' => 9],
            ['role_id' => 5, 'category_id' => 10],

            // Team Lead
            ['role_id' => 6, 'category_id' => 3],
            ['role_id' => 6, 'category_id' => 4],
            ['role_id' => 6, 'category_id' => 5],
            ['role_id' => 6, 'category_id' => 6],
            ['role_id' => 6, 'category_id' => 7],
            ['role_id' => 6, 'category_id' => 9],
            ['role_id' => 6, 'category_id' => 10],

            // Developer
            ['role_id' => 7, 'category_id' => 3],
            ['role_id' => 7, 'category_id' => 4],
            ['role_id' => 7, 'category_id' => 5],
            ['role_id' => 7, 'category_id' => 6],
            ['role_id' => 7, 'category_id' => 9],
            ['role_id' => 7, 'category_id' => 10],

            // Business analyst
            ['role_id' => 8, 'category_id' => 2],
            ['role_id' => 8, 'category_id' => 3],
            ['role_id' => 8, 'category_id' => 4],
            ['role_id' => 8, 'category_id' => 5],
            ['role_id' => 8, 'category_id' => 6],
            ['role_id' => 8, 'category_id' => 9]
        ];

        DB::table('role_car_categories')->insert($roleCarCategories);
    }
}

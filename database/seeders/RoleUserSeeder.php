<?php

namespace Database\Seeders;

use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    public function run()
    {
        $users = User::all();

        foreach ($users as $user)
        {
            RoleUser::factory()->create([
                'user_id' => $user->id,
            ]);
        }
    }
}

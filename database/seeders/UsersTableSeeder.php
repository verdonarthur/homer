<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [];
        for($i = 0; $i < 15; $i ++){
            $n = rand(1, 2);
            $user = [
                'group_id' => $n,
                'name' => fake()->name,
                'email' => fake()->email,
                'password' => Hash::make(fake()->password)
            ];
            array_push($users, $user);
        }
        DB::table('users')->insert($users);
    }
}

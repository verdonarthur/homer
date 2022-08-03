<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            "group_id" => 1,
            "name" => "admin2",
            "email" => "email1@gmx.ch",
            "password" => Hash::make("password1"),
        ]);
        DB::table('users')->insert([
            "group_id" => 2,
            "name" => "not-admin",
            "email" => "email2@gmx.ch",
            "password" => Hash::make("password2"),
        ]);
    }
}

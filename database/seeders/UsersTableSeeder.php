<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

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
            "group_id" => 2,
            "name" => "admin2",
            "email" => "email1@gmx.ch",
            "password" => "password1",
        ]);
        DB::table('users')->insert([
            "group_id" => 2,
            "name" => "not-admin",
            "email" => "email2@gmx.ch",
            "password" => "password2",
        ]);
    }
}

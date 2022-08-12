<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(TypesTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}

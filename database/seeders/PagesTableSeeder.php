<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PagesTableSeeder extends Seeder
{
    public function run()
    {
        for($i = 1; $i <= 50; $i ++){
            DB::table('pages')->insert([
                "title" => "Page title ".$i,
                "url" => "url/".$i
            ]);
        }
    }
}

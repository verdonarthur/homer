<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesTableSeeder extends Seeder
{
    public function run()
    {
        $limit = env('PAGES_SEEDER_LIMIT', 50);
        $pages = [];
        for($i = 0; $i < $limit; $i++){
            $newPage = [
                'title' => fake()->sentence,
                'url' => fake()->word
            ];
            array_push($pages, $newPage);
        }                    
        DB::table('pages')->insert($pages);
    }
}

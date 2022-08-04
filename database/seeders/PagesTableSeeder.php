<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesTableSeeder extends Seeder
{
    public function run(): void
    {
        $limit = env('PAGES_SEEDER_LIMIT', 50);
        $pages = [];
        for($i = 0; $i < $limit; $i++){
            $n = rand(1,3);
            $newPage = [
                'type_id' => $n,
                'title' => fake()->sentence,
                'url' => fake()->word
            ];
            $pages[] = $newPage;
        }
        DB::table('pages')->insert($pages);
    }
}


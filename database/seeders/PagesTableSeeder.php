<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesTableSeeder extends Seeder
{
    public function run()
    {
        $data = [];
        for($i = 1; $i <= 1000; $i ++){
            $new_data = [
                'title' => fake()->state(),
                'url' => 'url'.$i
            ];
            array_push($data, $new_data);
        }                    
        DB::table('pages')->insert($data);
    }
}

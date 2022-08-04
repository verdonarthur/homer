<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            [
                'name' => 'Product',
                'layout' => 'product'
            ],
            [
                'name' => 'Generic',
                'layout' => 'generic'
            ],
            [
                'name' => 'Boutique',
                'layout' => 'boutique'
            ]
        ];

        DB::table('types')->insert($types);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('deities')->insert([
            'deity'=> 'Sun',
        ]);
        DB::table('deities')->insert([
            'deity'=> 'Shiv',
        ]);
        DB::table('deities')->insert([
            'deity'=> 'Vishnu',
        ]);
        DB::table('deities')->insert([
            'deity'=> 'Ganesh',
        ]);
        DB::table('deities')->insert([
            'deity'=> 'Laxmi Narayan',
        ]);
        DB::table('deities')->insert([
            'deity'=> 'Laxmi Narayan'
        ]);
        DB::table('deities')->insert([
            'deity'=> 'Narsimha',
        ]);
        DB::table('deities')->insert([
            'deity'=> 'Bhirava',
        ]);

        DB::table('deities')->insert([
            'deity'=> 'Hanuman',
        ]); 
    }
}

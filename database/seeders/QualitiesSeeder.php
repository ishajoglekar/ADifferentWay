<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QualitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('qualities')->insert([
            'quality'=> 'A',
        ]);

        DB::table('qualities')->insert([
            'quality'=> 'B',
        ]);

        DB::table('qualities')->insert([
            'quality'=> 'C',
        ]);

        DB::table('qualities')->insert([
            'quality'=> 'D',
        ]);

        DB::table('qualities')->insert([
            'quality'=> 'E',
        ]);
        DB::table('qualities')->insert([
            'quality'=> 'F',
        ]);
        DB::table('qualities')->insert([
            'quality'=> 'G',
        ]);
        DB::table('qualities')->insert([
            'quality'=> 'H',
        ]);
        DB::table('qualities')->insert([
            'quality'=> 'I',
        ]);
    }
}



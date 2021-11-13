<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('planets')->insert([
            'name'=> 'Sun',
        ]);
        DB::table('planets')->insert([
            'name'=> 'Moon',
        ]);
        DB::table('planets')->insert([
            'name'=> 'Jupiter',
        ]);
        DB::table('planets')->insert([
            'name'=> 'Sun',
        ]);
        DB::table('planets')->insert([
            'name'=> 'Sun',
        ]);
        DB::table('planets')->insert([
            'name'=> 'Sun',
        ]);


    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BirthNumbersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('birthnumbers')->insert([
            'planet'=> 'SUN',
        ]);

        DB::table('birthnumbers')->insert([
            'planet'=> 'MOON',
        ]);
        DB::table('birthnumbers')->insert([
            'planet'=> 'JUPITER',
        ]);
        DB::table('birthnumbers')->insert([
            'planet'=> 'URANUS'
        ]);
        DB::table('birthnumbers')->insert([
            'planet'=> 'MERCURY',
        ]);
        DB::table('birthnumbers')->insert([
            'planet'=> 'VENUS'
        ]);
        DB::table('birthnumbers')->insert([
            'planet'=> 'NEPTUNE'
        ]);
        DB::table('birthnumbers')->insert([
            'planet'=> 'SATURN',
        ]);
        DB::table('birthnumbers')->insert([
            'planet'=> 'MARS',
        ]);
    }
}

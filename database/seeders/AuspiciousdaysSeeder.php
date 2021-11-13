<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuspiciousdaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('auspiciousdays')->insert([
            'days'=> 'Sunday, Monday',
        ]);

        DB::table('auspiciousdays')->insert([
            'days'=> 'Sunday, Monday, Friday',
        ]);
        DB::table('auspiciousdays')->insert([
            'days'=> 'Tuesday, Thursday, Friday',
        ]);
        DB::table('auspiciousdays')->insert([
            'days'=> 'Sunday, Monday, Saturday'
        ]);
        DB::table('auspiciousdays')->insert([
            'days'=> 'Wednesday, Thursday, Friday',
        ]);
        DB::table('auspiciousdays')->insert([
            'days'=> 'Tuesday, Thursday, Friday'
        ]);
        DB::table('auspiciousdays')->insert([
            'days'=> 'Sunday, Monday'
        ]);
        DB::table('auspiciousdays')->insert([
            'days'=> 'Sunday, Monday, Saturday',
        ]);
        DB::table('auspiciousdays')->insert([
            'days'=> 'Tuesday, Thursday, Friday',
        ]);
    }
}

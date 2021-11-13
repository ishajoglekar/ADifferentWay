<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LuckydatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('luckydates')->insert([
            'dates'=> '1, 10, 19, 28',
        ]);
        DB::table('luckydates')->insert([
            'dates'=> '2, 12, 20, 29',
        ]);
        DB::table('luckydates')->insert([
            'dates'=> ' 3, 12, 21, 30',
        ]);
        DB::table('luckydates')->insert([
            'dates'=> ' 4, 13, 22, 31',
        ]);
        DB::table('luckydates')->insert([
            'dates'=> '5, 14, 23',
        ]);
        DB::table('luckydates')->insert([
            'dates'=> '6, 15, 24'
        ]);
        DB::table('luckydates')->insert([
            'dates'=> '7, 16, 25',
        ]);
        DB::table('luckydates')->insert([
            'dates'=> '8,17,26',
        ]);

        DB::table('luckydates')->insert([
            'dates'=> '9,18,27',
        ]); 
    }
}

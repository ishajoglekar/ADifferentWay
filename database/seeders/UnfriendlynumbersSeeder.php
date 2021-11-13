<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnfriendlynumbersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unfriendlynumbers')->insert([
            'numbers'=> '8',
        ]);
        DB::table('unfriendlynumbers')->insert([
            'numbers'=> '4,8,9',
        ]);
        DB::table('unfriendlynumbers')->insert([
            'numbers'=> '6',
        ]);
        DB::table('unfriendlynumbers')->insert([
            'numbers'=> '4,8,9,2',
        ]);
        DB::table('unfriendlynumbers')->insert([
            'numbers'=> '-',
        ]);
        DB::table('unfriendlynumbers')->insert([
            'numbers'=> '3'
        ]);
        DB::table('unfriendlynumbers')->insert([
            'numbers'=> '-',
        ]);
        DB::table('unfriendlynumbers')->insert([
            'numbers'=> '1,2,4,8',
        ]);

        DB::table('unfriendlynumbers')->insert([
            'numbers'=> '2,4',
        ]); 
    }
}

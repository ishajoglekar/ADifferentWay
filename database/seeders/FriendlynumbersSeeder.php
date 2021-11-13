<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FriendlynumbersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('friendlynumbers')->insert([
            'numbers'=> '9,2,5,3,6,1,4',
        ]);
        DB::table('friendlynumbers')->insert([
            'numbers'=> '1,5,3,2',
        ]);
        DB::table('friendlynumbers')->insert([
            'numbers'=> '1,5,2,3,7',
        ]);
        DB::table('friendlynumbers')->insert([
            'numbers'=> '7,1,5,6',
        ]);
        DB::table('friendlynumbers')->insert([
            'numbers'=> '1,2,3,6,5',
        ]);
        DB::table('friendlynumbers')->insert([
            'numbers'=> '1,5,7,6,4'
        ]);
        DB::table('friendlynumbers')->insert([
            'numbers'=> '4,6,1,5,3',
        ]);
        DB::table('friendlynumbers')->insert([
            'numbers'=> '5,3,7,6',
        ]);

        DB::table('friendlynumbers')->insert([
            'numbers'=> '1,5,3',
        ]); 

    }
}

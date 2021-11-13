<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NeutralnumbersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('neutralnumbers')->insert([
            'numbers'=> '4,7',
        ]);
        DB::table('neutralnumbers')->insert([
            'numbers'=> '6,7',
        ]);
        DB::table('neutralnumbers')->insert([
            'numbers'=> '8, 9, 7, 4',
        ]);
        DB::table('neutralnumbers')->insert([
            'numbers'=> '3',
        ]);
        DB::table('neutralnumbers')->insert([
            'numbers'=> '8,7,9,4',
        ]);
        DB::table('neutralnumbers')->insert([
            'numbers'=> '8,9,2,4'
        ]);
        DB::table('neutralnumbers')->insert([
            'numbers'=> '3,8,2,7,9',
        ]);
        DB::table('neutralnumbers')->insert([
            'numbers'=> '9',
        ]);
        DB::table('neutralnumbers')->insert([
            'numbers'=> '7,8,9,6',
        ]);

    }
}

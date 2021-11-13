<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LuckycolorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('luckycolors')->insert([
            'colors'=> 'Yellow, Golden, Orange, Red, White',
        ]);
        DB::table('luckycolors')->insert([
            'colors'=> 'White, Golden, Orange, Green',
        ]);
        DB::table('luckycolors')->insert([
            'colors'=> 'Yellow, Orange, Red, White',
        ]);
        DB::table('luckycolors')->insert([
            'colors'=> 'Steel Gray, Pink, Sky Blue, Blue',
        ]);
        DB::table('luckycolors')->insert([
            'colors'=> 'Green, Orange, Pink',
        ]);
        DB::table('luckycolors')->insert([
            'colors'=> 'Pink, Green, Dark Blue, Gray4'
        ]);
        DB::table('luckycolors')->insert([
            'colors'=> 'Brown, Orange, Red, Purple',
        ]);
        DB::table('luckycolors')->insert([
            'colors'=> 'Blue, Green, Pink, Gray',
        ]);

        DB::table('luckycolors')->insert([
            'colors'=> 'Red, Orange, Yellow',
        ]); 
        
    }
}



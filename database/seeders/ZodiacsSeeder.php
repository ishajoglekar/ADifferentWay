<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZodiacsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('zodiacs')->insert([
            'name'=> 'Aries',
            'element_id'=> 2,
            
            'birthnumber_id'=> 9
            
        ]);

        DB::table('zodiacs')->insert([
            'name'=> 'Taurus',
            'element_id'=> 1,
            'birthnumber_id'=> 6
            
        ]);
        DB::table('zodiacs')->insert([
            'name'=> 'Gemini',
            'element_id'=> 4,
            'birthnumber_id'=> 5
        ]);
        DB::table('zodiacs')->insert([
            'name'=> 'Cancer',
            'element_id'=> 3,
            'birthnumber_id'=> 2
        ]);
        DB::table('zodiacs')->insert([
            'name'=> 'Leo',
            'element_id'=> 2,
            'birthnumber_id'=> 1
        ]);
        DB::table('zodiacs')->insert([
            'name'=> 'Virgo',
            'element_id'=> 1,
            'birthnumber_id'=> 5
        ]);
        DB::table('zodiacs')->insert([
            'name'=> 'Libra',
            'element_id'=> 4,
            'birthnumber_id'=> 6
        ]);
        DB::table('zodiacs')->insert([
            'name'=> 'Scorpio',
            'element_id'=> 3,
            'birthnumber_id'=> 9
        ]);
        DB::table('zodiacs')->insert([
            'name'=> 'Sagittarius',
            'element_id'=> 2,
            'birthnumber_id'=> 3
        ]);
        DB::table('zodiacs')->insert([
            'name'=> 'Capricorn',
            'element_id'=> 1,
            'birthnumber_id'=> 8
        ]);
        DB::table('zodiacs')->insert([
            'name'=> 'Aquarius',
            'element_id'=> 4,
            'birthnumber_id'=> 8
        ]);
        DB::table('zodiacs')->insert([
            'name'=> 'Pisces',
            'element_id'=> 3,
            'birthnumber_id'=> 3
        ]);
    }
}

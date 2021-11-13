<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuspiciousmonthsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('auspiciousmonths')->insert([
            'months'=> 'Jan, March, May, July and Oct',
        ]);
        DB::table('auspiciousmonths')->insert([
            'months'=> 'Feb, April, Aug, Nov',
        ]);
        DB::table('auspiciousmonths')->insert([
            'months'=> 'March, May, July, June, Sept, Dec',
        ]);
        DB::table('auspiciousmonths')->insert([
            'months'=> 'April, Feb, Aug',
        ]);
        DB::table('auspiciousmonths')->insert([
            'months'=> 'May, Jan, March',
        ]);
        DB::table('auspiciousmonths')->insert([
            'months'=> 'June, Sept'
        ]);
        DB::table('auspiciousmonths')->insert([
            'months'=> 'July, Jan, March, May',
        ]);
        DB::table('auspiciousmonths')->insert([
            'months'=> 'Aug, Feb, April',
        ]);
        DB::table('auspiciousmonths')->insert([
            'months'=> 'Sept, March, June',
        ]);

    }
}

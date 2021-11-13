<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonalyearsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('personalyears')->insert([
            'explanation' => "Higher energy - leadership- action- shine- long run impact- Reorganizing yourself. Good year for finance/car/kids/marriage. All desir.es will get fulfilled. This year will show sometimes Rudeness in you. will change stand again & again. Time will waste."
        ]);

        DB::table('personalyears')->insert([
            'explanation' => "Lot of creative Ideas & Intutions.Improve old relations. Multiple chances of fun, travel, enjoyment. Develop new skills & Interests. Waiting period, don\'t do new work, Mood Swings, Tempt to push. Confused between emotions & Reality. Become sensitive & unpredictable. Control to words - will gain & loose."
        ]);

        DB::table('personalyears')->insert([
            'explanation' => "Education is good in this year.. education related profession. Full of expansions, gains, achievement. In this year with wisdom & good communication skills will get work, but difficult to focus, not conclude things, leave them undone.Chant Vishnu sahastranam to overcome this issue"
        ]);

        DB::table('personalyears')->insert([
            'explanation' => "Good personal year, goals will achieved with hardwork. Communication skills do wonders, will execute ideas /plans and will make wise & profitable decisions Career will shine.But prevent speaking harshly & choose words wisely as personal year is on 4 (rahu)."
        ]);

        DB::table('personalyears')->insert([
            'explanation' => "This year communication skills do wonders- will learn anything quickly- execute ideas/ plans & make wise & profitable decesions-career will shine & achieve-set goals-no obstacles- change in new home/office or renavation - country-marriage- kids- prepare to expect the unexpected- this is not preparation period-direct action to achieve.but take care of duality or confusion- some unwanted changes"
        ]);

        DB::table('personalyears')->insert([
            'explanation' => "Good changes in life, will buy luxury items, redecorate or new home, will get good news from.multiple sides- success in a buisness, happiness, abundance & enjoyment. In this year may face emotional dissatisfaction or slow in terms of results."
        ]);

        DB::table('personalyears')->insert([
            'explanation' => "Good year for Education & Spiritualism. Gentle year- knowledge & wisdom- meditation- Intution- Manifest- Reading- Sabbatical year. but mind will be disturb. Problems in communication & expressing yourself. difficulties in executing plans."
        ]);

        DB::table('personalyears')->insert([
            'explanation' => "Good time to execute plans, reaping fruits of previous ones, professional life meaningful + profitable decisions-work - career but be less expensive- disturbance in family - will speak up witgout thinking & regret later - situations will keep you irritated."
        ]);
        DB::table('personalyears')->insert([
            'explanation' => "No new experiment/ auditing period/ wrong decision so do not take any decision in hurry."
        ]);
    }
}

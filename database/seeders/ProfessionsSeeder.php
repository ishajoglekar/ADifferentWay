<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professions')->insert([
            'name' => "Leadership qualities, ambitious, short tempered,aggressive, attention seekers, intelligent, selfish" ,
            'birthnumber_id'=>1
        ]);
        DB::table('professions')->insert([
            'name' => "Emotional,confused, not good decision makers,intuitive, blame others easily, mood swings",
            'birthnumber_id'=>2
        ]);
        DB::table('professions')->insert([
            'name' => "The number of divin blessings, good communication skills, social, moody, choosy, argumentative",
            'birthnumber_id'=>3
        ]);
        DB::table('professions')->insert([
            'name' => "Practical, organized, methodical, straightforward, hard working, struggling life",
            'birthnumber_id'=>4
        ]);
        DB::table('professions')->insert([
            'name' => "Freedom lovers, flexible, love travelling, need variety in life, intellectual",
            'birthnumber_id'=>5
        ]);
        DB::table('professions')->insert([
            'name' => "Compassionate, attractive personality, family oriented, responsible, policy makers, love luxuries, in life",
            'birthnumber_id'=>6
        ]);
        DB::table('professions')->insert([
            'name' => "Intellectual, deep thinkers, have limited friends, emotional, spiritual, secretive",
            'birthnumber_id'=>7
        ]);
        DB::table('professions')->insert([
            'name' => "Materialistic, practical, rigid, highly ambitious, workaholic, authoritative",            
            'birthnumber_id'=>8
        ]);
        DB::table('professions')->insert([
            'name' => "Passionate Risk takers, Aggressive, Bold ,Straight Forward, help people",
            'birthnumber_id'=>9
        ]);
    }
}

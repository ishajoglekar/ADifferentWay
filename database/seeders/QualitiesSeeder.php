<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QualitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('qualities')->insert([
            'quality' => "Leadership qualities, ambitious, short tempered,aggressive, attention seekers, intelligent, selfish" ,
            
        ]);
        DB::table('qualities')->insert([
            'quality' => "Emotional,confused, not good decision makers,intuitive, blame others easily, mood swings",
            
        ]);
        DB::table('qualities')->insert([
            'quality' => "The number of divin blessings, good communication skills, social, moody, choosy, argumentative",
            
        ]);
        DB::table('qualities')->insert([
            'quality' => "Practical, organized, methodical, straightforward, hard working, struggling life",
            
        ]);
        DB::table('qualities')->insert([
            'quality' => "Freedom lovers, flexible, love travelling, need variety in life, intellectual",
            
        ]);
        DB::table('qualities')->insert([
            'quality' => "Compassionate, attractive personality, family oriented, responsible, policy makers, love luxuries, in life",
            
        ]);
        DB::table('qualities')->insert([
            'quality' => "Intellectual, deep thinkers, have limited friends, emotional, spiritual, secretive",
            
        ]);
        DB::table('qualities')->insert([
            'quality' => "Materialistic, practical, rigid, highly ambitious, workaholic, authoritative",            
            
        ]);
        DB::table('qualities')->insert([
            'quality' => "Passionate Risk takers, Aggressive, Bold ,Straight Forward, help people",
            
        ]);
    }
}



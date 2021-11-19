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
            'name' => "Any Profession / Any Business, related to luxury, glamour" ,
            'birthnumber_id'=>1
        ]);
        DB::table('professions')->insert([
            'name' => "Related to water element, Orator, Writer",
            'birthnumber_id'=>2
        ]);
        DB::table('professions')->insert([
            'name' => "Teaching, Healers, Doctors, Motivational Speaker",
            'birthnumber_id'=>3
        ]);
        DB::table('professions')->insert([
            'name' => "Sales & Marketing, Engineer, Physical Activity, Law Sector",
            'birthnumber_id'=>4
        ]);
        DB::table('professions')->insert([
            'name' => "Banking Sector, Real estate business, Finance related",
            'birthnumber_id'=>5
        ]);
        DB::table('professions')->insert([
            'name' => "Luxury & Glamour, Tours & Travels , Media Industry, Hotel Industry, Beauty Parlours ad Jewelery Designers, Architects & Interior Designers",
            'birthnumber_id'=>6
        ]);
        DB::table('professions')->insert([
            'name' => "Occult Science, Healing, Teaching, Research, Art related, Investigation Department",
            'birthnumber_id'=>7
        ]);
        DB::table('professions')->insert([
            'name' => "Law Setor, Leather Business, Mining & machineries , Import/Export, Chemical Factories, Medicines & Pharma ",
            'birthnumber_id'=>8
        ]);
        DB::table('professions')->insert([
            'name' => "Army, NGO, Teaching, Healing, Surgical Operations",
            'birthnumber_id'=>9
        ]);
    }
}

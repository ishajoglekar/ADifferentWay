<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\QualitiesSeeder;
use Database\Seeders\BirthNumbersSeeder;
use Database\Seeders\ElementsSeeder;
use Database\Seeders\PersonalyearsSeeder;
use Database\Seeders\LuckycolorsSeeder;
use Database\Seeders\DeitiesSeeder;
use Database\Seeders\FriendlynumbersSeeder;
use Database\Seeders\UnfriendlynumbersSeeder;
use Database\Seeders\NeutralnumbersSeeder;
use Database\Seeders\LuckydatesSeeder;
use Database\Seeders\AuspiciousdaysSeeder;
use Database\Seeders\AuspiciousmonthsSeeder;
use Database\Seeders\ZodiacsSeeder;
use Database\Seeders\ProfessionsSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BirthNumbersSeeder::class);
        $this->call(QualitiesSeeder::class);
        $this->call(ElementsSeeder::class);
        $this->call(PersonalyearsSeeder::class);
        $this->call(LuckycolorsSeeder::class);
        $this->call(DeitiesSeeder::class);
        $this->call(FriendlynumbersSeeder::class);
        $this->call(UnfriendlynumbersSeeder::class);
        $this->call(NeutralnumbersSeeder::class);
        $this->call(LuckydatesSeeder::class);
        $this->call(AuspiciousdaysSeeder::class);
        $this->call(AuspiciousmonthsSeeder::class);
        $this->call(ZodiacsSeeder::class);
        $this->call(ProfessionsSeeder::class);
        $this->call(UsersSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}

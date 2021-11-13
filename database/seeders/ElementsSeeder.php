<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ElementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('elements')->insert([
            'element'=> 'Earth',
            'explanation' => "Earth signs are “grounded” and the ones that bring us down to earth. They are mostly conservative and realistic, but they can also be very emotional. They are connected to our material reality and can be turned to material goods. They are practical, loyal and stable and they stick by their people through hard times. The Earth Signs are: Taurus, Virgo and Capricorn"
        ]);

        DB::table('elements')->insert([
            'element'=>'Fire',
            'explanation' => "Fire signs tend to be passionate, dynamic, and temperamental. They get angry quickly, but they also forgive easily. They are adventurers with immense energy. They are physically very strong and are a source of inspiration for others. Fire signs are intelligent, self-aware, creative and idealistic people, always ready for action. The Fire Signs are: Aries, Leo and Sagittarius."
        ]);

        DB::table('elements')->insert([
            'element'=>'Water',
            'explanation' => "Water signs are exceptionally emotional and ultra-sensitive. They are highly intuitive and they can be as mysterious as the ocean itself. Water signs love profound conversations and intimacy. They rarely do anything openly and are always there to support their loved ones. The Water Signs are: Cancer, Scorpio and Pisces."
        ]);

        DB::table('elements')->insert([
            'element'=>'Air',
            'explanation' => "Air signs are rational, social, and love communication and relationships with other people. They are thinkers, friendly, intellectual, communicative and analytical. They love philosophical discussions, social gatherings and good books. They enjoy giving advice, but they can also be very superficial. The Air Signs are: Gemini, Libra and Aquarius"
        ]);

        
    }
}

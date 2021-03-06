<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Admin",
            "email" => "admin@gmail.com",
            'password' => Hash::make("admin1234"),
        ]);

        DB::table('users')->insert([
            'name' => "Anujja Vavhal",
            "email" => "adifferentway@gmail.com",
            'password' => Hash::make("anujjavavhal"),
        ]);
    }
}

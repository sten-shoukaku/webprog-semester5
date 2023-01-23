<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "username" => "Edbert",
            "email" => "edbert.fangasadha@binus.ac.id",
            "password" => "2440047873",
            "confirmPassword" => "2440047873",
            "phone" => "082365427900",
            "role" => "member",
        ]);

        DB::table('users')->insert([
            "username" => "admin",
            "email" => "admin@gmail.com",
            "password" => "2440047873",
            "confirmPassword" => "2440047873",
            "phone" => "082365427900",
            "role" => "admin",
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::query()->insert([
            [
                "id"=> 1,
                "username"=> "asalasal",
                "email"=> "asalasal@gmail.com",
                "password"=> bcrypt("asalasal"),
                "confirmPassword"=> bcrypt("asalasal"),
                "phone"=> "089675627226",
                "role"=> "member",
            ],
            [
                "id"=> 2,
                "username"=> "Admin Ontick",
                "email"=> "ontickadmin@gmail.com",
                "password"=> bcrypt("admin"),
                "confirmPassword"=>bcrypt("admin"),
                "phone"=> "089675627226",
                "role"=> "admin",
            ]
        ]);
    }
}

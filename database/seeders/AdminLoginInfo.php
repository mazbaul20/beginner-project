<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminLoginInfo extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                "name"=>"admin",
                "email"=>"admin@gmail.com",
                "password"=>Hash::make("11111111"),
            ],
            [
                "name"=>"admin3",
                "email"=>"admin3@gmail.com",
                "password"=>Hash::make("11111111"),
            ]
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\languages;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // languages::factory(5)->create();
        DB::table('skills')->insert([
            [
                "name"=>"Osinski Trafficway",
            ],
            [
                "name"=>"Wolf Trace",
            ],
            [
                "name"=>"Stracke Mews",
            ],
            [
                "name"=>"Stanton Camp",
            ],
            [
                "name"=>"Buckridge Passage",
            ],
            [
                "name"=>"Wilkinson Greens",
            ],
            [
                "name"=>"Bailey Pike",
            ],
            [
                "name"=>"Cortney Forks",
            ],
            [
                "name"=>"Watsica Plains",
            ],
            [
                "name"=>"Leannon Unions",
            ]

        ]);
    }
}

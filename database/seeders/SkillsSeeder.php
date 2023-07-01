<?php

namespace Database\Seeders;

use App\Models\skills;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // skills::factory(5)->create();
        DB::table('skills')->insert([
            [
                "name"=>"SEO/SEM Marketing",
            ],
            [
                "name"=>"Statistical Analysis",
            ],
            [
                "name"=>"Web Development",
            ],
            [
                "name"=>"Network Security",
            ],
            [
                "name"=>"Adobe Software Suite",
            ],
            [
                "name"=>"User Interface Design",
            ],
            [
                "name"=>"Ignatius Murray",
            ],
            [
                "name"=>"Fabiola Jones",
            ],
            [
                "name"=>"Junius Mann",
            ],
            [
                "name"=>"Patrick Bayer I",
            ],

        ]);
    }
}

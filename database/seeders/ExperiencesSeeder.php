<?php

namespace Database\Seeders;

use App\Models\experiences;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ExperiencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // experiences::factory(5)->create();
        DB::table('experiences')->insert([
            [
                'duration'=>'2019 - Present',
                'title'=>'Stark Industries',
                'designation'=>'Web Developer',
                'details'=>'Lorem ipsum dolor sit amet consectetur adipisicing',
            ],
            [
                'duration'=>'2017 - 2019',
                'title'=>'SEM Specialist',
                'designation'=>'Wayne Enterprises Gotham City, NY',
                'details'=>'Lorem ipsum dolor sit amet consectetur adipisicing',
            ],
            [
                'duration'=>'2017 - 2019',
                'title'=>'SEM Specialist',
                'designation'=>'Wayne Enterprises Gotham City, NY',
                'details'=>'Lorem ipsum dolor sit amet consectetur adipisicing',
            ]
        ]);
    }
}

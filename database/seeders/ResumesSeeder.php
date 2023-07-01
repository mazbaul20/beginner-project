<?php

namespace Database\Seeders;

use App\Models\resumes;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ResumesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // resumes::factory(5)->create();
        DB::table('resumes')->insert([
            [
                'downloadLink'=>'https://drive.google.com/file/d/1N9IIOBIwefcKnWpEHM-06fRn6FWVYJmm/view?usp=sharing',

            ]
        ]);
    }
}

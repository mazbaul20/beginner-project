<?php

namespace Database\Seeders;

use App\Models\resumes;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ResumesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        resumes::factory(5)->create();
    }
}

<?php

namespace Database\Seeders;

use App\Models\Educations;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EducationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Educations::factory(5)->create();
    }
}

<?php

namespace Database\Seeders;

use App\Models\experiences;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ExperiencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        experiences::factory(5)->create();
    }
}

<?php

namespace Database\Seeders;

use App\Models\languages;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        languages::factory(10)->create();
    }
}

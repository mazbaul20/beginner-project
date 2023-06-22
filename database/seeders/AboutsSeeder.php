<?php

namespace Database\Seeders;

use App\Models\abouts;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AboutsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        abouts::factory(10)->create();
    }
}

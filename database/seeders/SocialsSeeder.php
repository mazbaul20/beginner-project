<?php

namespace Database\Seeders;

use App\Models\Socials;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SocialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Socials::factory(10)->create();
    }
}

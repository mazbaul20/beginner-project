<?php

namespace Database\Seeders;

use App\Models\Heroproperties;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HeropropertiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Heroproperties::factory(10)->create();
    }
}

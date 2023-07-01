<?php

namespace Database\Seeders;

use App\Models\Heroproperties;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HeropropertiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Heroproperties::factory(5)->create();
        DB::table('heroproperties')->insert([
            [
                'keyLine'=>'DESIGN · DEVELOPMENT · MARKETING',
                'title'=>'Get online and grow fast',
                'short_title'=>'I can help your business to',
                'img'=>'https://i.ibb.co/HFrbNpS/profile.png',
            ],
            [
                'keyLine'=>'Nisi est nihil.',
                'title'=>'Dr.',
                'short_title'=>'Repellendus eaque.',
                'img'=>'https://i.ibb.co/HFrbNpS/profile.png',
            ]
        ]);
    }
}

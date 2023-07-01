<?php

namespace Database\Seeders;

use App\Models\Socials;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SocialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Socials::factory(3)->create();
        DB::table('socials')->insert([
            [
                'twitterLink'=>'http://twitterLink.com',
                'githubLink'=>'http://linkedin.com',
                'linkdinLink'=>'http://github.com',
            ]
        ]);
    }
}

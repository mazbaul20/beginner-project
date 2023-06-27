<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class seoproperties extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('seoproperties')->insert([
            [
                'pageName'=>'home',
                'title'=>'Home Title',
                'keywords'=>'Home keywords Here',
                'description'=>'Home Description Here',
                'ogSiteName'=>'Site Name Here',
                'ogUrl'=>'http://127.0.0.1:8000/',
                'ogTitle'=>'Home Title',
                'ogDescription'=>'Home Description',
                'ogImage'=>'https://i.ibb.co/HFrbNpS/profile.png',
            ],
            [
                'pageName'=>'resume',
                'title'=>'Resume Title Here',
                'keywords'=>'Resume Keywords Here',
                'description'=>'Resume Description Here',
                'ogSiteName'=>'Site Name Here',
                'ogUrl'=>'http://127.0.0.1:8000/resume',
                'ogTitle'=>'Resume Title',
                'ogDescription'=>'Resume Description',
                'ogImage'=>'https://i.ibb.co/HFrbNpS/profile.png',
            ],
            [
                'pageName'=>'projects',
                'title'=>'projects Title',
                'keywords'=>'projects keywords Here',
                'description'=>'projects Description Here',
                'ogSiteName'=>'Site Name Here',
                'ogUrl'=>'http://127.0.0.1:8000/projects',
                'ogTitle'=>'projects Title',
                'ogDescription'=>'projects Description',
                'ogImage'=>'https://i.ibb.co/HFrbNpS/profile.png',
            ],
            [
                'pageName'=>'contact',
                'title'=>'contact Title',
                'keywords'=>'contact keywords Here',
                'description'=>'contact Description Here',
                'ogSiteName'=>'Site Name Here',
                'ogUrl'=>'http://127.0.0.1:8000/contact',
                'ogTitle'=>'contact Title',
                'ogDescription'=>'contact Description',
                'ogImage'=>'https://i.ibb.co/HFrbNpS/profile.png',
            ]
        ]);
    }
}

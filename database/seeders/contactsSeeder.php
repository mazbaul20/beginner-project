<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\contacts;

class contactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('contacts')->insert([
        //     [
        //         'fullName' => 'Touhidul islam',
        //         'email' => 'touhidul@gmail.com',
        //         'phone' => '01776286319',
        //         'message' => 'This is a demo message'
        //     ],
        //     [
        //         'fullName' => 'Hadiul islam',
        //         'email' => 'hadiul@gmail.com',
        //         'phone' => '01776286621',
        //         'message' => 'This is a demo message two'
        //     ]
        // ]);
        contacts::factory(5)->create();
    }
}

<?php

namespace Database\Seeders;

use App\Models\Educations;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EducationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Educations::factory(5)->create();
        DB::table('educations')->insert([
            [
                'duration'=>'2015 - 2017',
                'institutionName'=>'Barnett College',
                'field'=>"Master's Web Development",
                'details'=>'Mollitia odio deleniti sapiente molestiae nihil praesentium. Impedit aliquam iste rerum sit molestiae sit non. Numquam facilis aut qui totam at voluptate laudantium.',
            ],
            [
                'duration'=>'2011 - 2015',
                'institutionName'=>'ULA',
                'field'=>'Undergraduate Computer Science',
                'details'=>'Ut animi est blanditiis. Ad odit molestias voluptatem autem sint. Libero similique non labore. Cupiditate recusandae voluptates eos qui porro rerum aut. Veritatis consequatur consequatur neque eius omnis sit sed.',
            ],
            [
                'duration'=>'2011 - 2015',
                'institutionName'=>'ULA',
                'field'=>'Undergraduate Computer Science',
                'details'=>'Commodi nobis voluptatum et velit reprehenderit vel. Totam et et sed possimus dignissimos minus expedita. Exercitationem nulla illum aliquid officia. Inventore omnis labore quos enim consequatur a.',
            ],
            [
                'duration'=>'2011 - 2015',
                'institutionName'=>'Barnett College',
                'field'=>"Master's Web Developmen",
                'details'=>'Illo porro placeat molestias voluptas ipsum. Quam dolore in illum dolorem et velit. Vel architecto quisquam aspernatur.',
            ]
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\projects;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // projects::factory(5)->create();
        DB::table('projects')->insert([
            [
                "title"=>"Prof.",
                "previewLink"=>"http://www.google.com",
                "thumbnailLink"=>"https://i.ibb.co/tXHRdt4/300x400.webp",
                "details"=>"Sequi non eos culpa non doloribus. Amet tenetur sed ipsam suscipit eum ea. Harum ipsa qui sit labore placeat officiis ab.",
            ],
            [
                "title"=>"Dr.",
                "previewLink"=>"http://www.bartoletti.com/quis-id-dolor-aut-nam.ht...",
                "thumbnailLink"=>"https://i.ibb.co/tXHRdt4/300x400.webp",
                "details"=>"Sunt consequatur voluptatem enim eligendi est odio. Quae adipisci nam laudantium. Rerum quis pariatur minus.",
            ],
            [
                "title"=>"Ms.",
                "previewLink"=>"http://reilly.com/excepturi-dignissimos-reprehenderit-aut-officiis-accusantium-voluptatem-in.html",
                "thumbnailLink"=>"https://i.ibb.co/tXHRdt4/300x400.webp",
                "details"=>"Blanditiis doloribus inventore dicta omnis sit quas. Minima ea sunt et delectus aspernatur et adipisci fugit. Ut est ut non ullam illum.",
            ]
        ]);
    }
}

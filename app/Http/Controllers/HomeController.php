<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function page(){
        return view('frontend.index');
    }
    public function HeroData(){
        $heroDatas = DB::table('heroproperties')->first();
        return $heroDatas;
    }
    public function AboutData(){
        $aboutData = DB::table('abouts')->first();
        return $aboutData;
    }
    public function SocialData(){
        return DB::table('socials')->first();
    }
}


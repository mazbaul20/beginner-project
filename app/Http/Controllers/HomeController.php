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
        $heroDatas = DB::table('heroproperties')->select('*')->find(11);
        return view('frontend.index',['heroDatas'=>$heroDatas]);
    }
    public function AboutData(){
        $aboutData = DB::table('abouts')->select('*')->get();
        return $aboutData;
    }
    public function SocialData(){
        $socialData = DB::table('socials')->select('*')->get();
        return $socialData;
    }
}


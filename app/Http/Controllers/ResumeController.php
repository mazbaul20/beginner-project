<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResumeController extends Controller
{
    public function page(){
        $seo = DB::table('seoproperties')->where('pageName','resume')->first();
        return view('frontend.pages.resume',compact('seo'));
    }
    public function ExperienceData(){
        $experienceData = DB::table('experiences')->get();
        return $experienceData;
    }
    public function ResumeLink(){
        $resumeLink = DB::table('resumes')->first();
        return $resumeLink;
    }
    public function EducationData(){
        $educationData = DB::table('educations')->get();
        return $educationData;
    }
    public function SkillData(){
        $skillData = DB::table('skills')->get();
        return $skillData;
    }
    public function LanguageData(){
        $languageData = DB::table('languages')->get();
        return $languageData;
    }
}

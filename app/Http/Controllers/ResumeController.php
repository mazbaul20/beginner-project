<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResumeController extends Controller
{
    public function page(){
        return view('frontend.pages.resume');
    }
    public function ExperienceData(){
        $experienceData = DB::table('experiences')->select('*')->get();
        return $experienceData;
    }
    public function ResumeLink(){
        $resumeLink = DB::table('resumes')->select('*')->get();
        return $resumeLink;
    }
    public function EducationData(){
        $educationData = DB::table('educations')->select('*')->get();
        return $educationData;
    }
    public function SkillData(){
        $skillData = DB::table('skills')->select('*')->get();
        return $skillData;
    }
    public function LanguageData(){
        $languageData = DB::table('languages')->select('*')->get();
        return $languageData;
    }
}

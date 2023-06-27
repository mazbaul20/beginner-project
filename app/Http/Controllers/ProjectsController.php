<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectsController extends Controller
{
    public function page(){
        $seo = DB::table('seoproperties')->where('pageName','projects')->first();
        return view('frontend.pages.projects',compact('seo'));
    }
    public function ProjectData(){
        $projectData = DB::table('projects')->get();
        return $projectData;
    }
}

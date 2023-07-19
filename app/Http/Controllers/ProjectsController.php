<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectsController extends Controller
{
    public function page(Request $request){
        $seo = DB::table('seoproperties')->where('pageName','projects')->first();
        return view('frontend.pages.projects',compact('seo'));
        // return $seo;
    }
    public function ProjectData(){
        $projectData = DB::table('projects')->get();
        return $projectData;
    }
}

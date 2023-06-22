<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectsController extends Controller
{
    public function page(){
        return view('frontend.pages.projects');
    }
    public function ProjectData(){
        $projectData = DB::table('projects')->select('*')->get();
        return $projectData;
    }
}

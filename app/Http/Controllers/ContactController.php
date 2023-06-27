<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function page(){
        $seo = DB::table('seoproperties')->where('pageName','contact')->first();
        return view('frontend.pages.contact',compact('seo'));
    }
    public function ContactRequest(Request $request){
        $insertData = DB::table('contacts')->insert($request->input());
        return $insertData;
    }
}

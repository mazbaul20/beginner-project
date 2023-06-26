<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function page(){
        return view('frontend.pages.contact');
    }
    public function ContactRequest(Request $request){
        $insertData = DB::table('contacts')->insert($request->input());
        return $insertData;
    }
}

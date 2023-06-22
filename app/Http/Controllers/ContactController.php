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
        $insertData = DB::table('contacts')->insert([
            'fullName'=>$request->input('fullName'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('phone'),
            'message'=>$request->input('message'),
        ]);
        return $insertData;
    }
}

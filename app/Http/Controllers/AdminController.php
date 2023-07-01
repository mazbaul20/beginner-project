<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function AdminDashboard(){
        return view('backend.pages.index');
    }
    public function AdminLogout(Request $request){
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    // Fetch data
    public function AdminHeroProperties(){
        $showData = DB::table('heroproperties')->get();
        return view('backend.pages.Hero-properties',compact('showData'));
    }// End method
    public function AdminHeroPropertiesEdit(Request $request){
        $showData = DB::table('heroproperties')->find($request->id);
        return view('backend.pages.Hero-form',compact('showData'));
    }// End method

    public function AdminHeroPropertiesUpdate(Request $request){
        // dd($request->all());
        $id = $request->id;
        $request->validate([
            'keyLine' => 'required|string',
            'title' => 'required|string',
            'short_title' => 'required|string',
            'img' => 'required|string',
        ]);

        DB::table('heroproperties')->where('id',$id)->update([
            'keyLine'=>$request->keyLine,
            'title'=>$request->title,
            'short_title'=>$request->short_title,
            'img'=>$request->img,
        ]);
        $notification  = array(
            'message' => 'Data Updated Successfully',// your message
            'alert-type' => 'success' // alert type
        );
        return redirect()->route('admin.Hero-properties')->with($notification);
    }// End method
}

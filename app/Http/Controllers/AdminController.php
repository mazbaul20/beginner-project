<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
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
        Toastr::success('Data Updated Successful', 'Update', ["positionClass" => "toast-top-center"]);
        return redirect()->route('admin.Hero-properties');
    }// End method

    public function AdminHeroPropertiesDelete(Request $request){
        DB::table('heroproperties')->where('id','=',$request->id)->delete();
        Toastr::warning('Data Deleted Successful', 'Delete', ["positionClass" => "toast-top-center"]);
        return redirect()->route('admin.Hero-properties.delete');
    }// End method
    public function AdminHeroPropertiesCreate(){
        return view('backend.component.create-hero');
    }// End method
    public function AdminHeroPropertiesStore(Request $request){
        $request->validate([
            'keyLine'=>'required|string',
            'title'=>'required|string',
            'short_title'=>'required|string',
            'img'=>'required|string',
        ]);
        DB::table('heroproperties')->insert([
            'keyLine'=>$request->keyLine,
            'title'=>$request->title,
            'short_title'=>$request->short_title,
            'img'=>$request->img,
        ]);
        Toastr::success('Data Created Successful', 'Create', ["positionClass" => "toast-top-center"]);
        return redirect()->route('admin.Hero-properties');
    }// End method
}

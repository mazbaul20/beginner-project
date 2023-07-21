<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class SocialLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $social_links = DB::table('socials')->get();
        return view('backend.pages.Social-links',compact('social_links'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.component.create_social-link');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'twitterLink'=>'required|string',
            'githubLink'=>'required|string',
            'linkdinLink'=>'required|string',
        ]);
        DB::table('socials')->insert([
            'twitterLink'=>$request->twitterLink,
            'githubLink'=>$request->githubLink,
            'linkdinLink'=>$request->linkdinLink,
        ]);
        Toastr::success('Data Created Successful', 'Create', ["positionClass" => "toast-top-center"]);
        return redirect()->route('admin.social-links');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $social_links = DB::table('socials')->find($request->id);
        return view('backend.component.social-link-EditForm',compact('social_links'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $request->validate([
            'twitterLink'=>'required|string',
            'githubLink'=>'required|string',
            'linkdinLink'=>'required|string',
        ]);
        DB::table('socials')->where('id',$id)->update([
            'twitterLink'=>$request->twitterLink,
            'githubLink'=>$request->githubLink,
            'linkdinLink'=>$request->linkdinLink,
        ]);
        Toastr::success('Data Updated Successful', 'Update', ["positionClass" => "toast-top-center"]);
        return redirect()->route('admin.social-links');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        DB::table('socials')->where('id','=',$request->id)->delete();
        Toastr::warning('Data Deleted Successful', 'Delete', ["positionClass" => "toast-top-center"]);
        return redirect()->route('admin.social-links');
    }
}

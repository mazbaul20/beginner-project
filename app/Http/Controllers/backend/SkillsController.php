<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = DB::table('skills')->get();
        return view('backend.pages.Resume_Skills',compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.component.create_skills');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('skills')->insert([
            'name' => $request->name
        ]);
        Toastr::success('Data Created Successful', 'Create', ["positionClass" => "toast-top-center"]);
        return redirect()->route('admin.skill');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $skill = DB::table('skills')->find($request->id);
        return view('backend.component.edit_skills',compact('skill'));
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
        DB::table('skills')->where('id',$request->id)->update([
            'name'=>$request->name
        ]);
        Toastr::success('Data Updated Successful', 'Update', ["positionClass" => "toast-top-center"]);
        return redirect()->route('admin.skill');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        DB::table('skills')->where('id','=',$request->id)->delete();
        Toastr::warning('Data Deleted Successful', 'Delete', ["positionClass" => "toast-top-center"]);
        return redirect()->route('admin.skill');
    }
}

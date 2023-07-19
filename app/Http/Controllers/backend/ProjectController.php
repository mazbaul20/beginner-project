<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = DB::table('projects')->get();
        return view('backend.pages.projects',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.component.create_project');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('projects')->insert([
            'title' => $request->title,
            'previewLink' => $request->previewLink,
            'thumbnailLink' => $request->thumbnailLink,
            'details' => $request->details
        ]);
        Toastr::success('Project Data Created Successful', 'Create', ["positionClass" => "toast-top-center"]);
        return redirect()->route('admin.project');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $project = DB::table('projects')->find($request->id);
        return view('backend.component.edit_project',compact('project'));
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
        DB::table('projects')->where('id',$request->id)->update([
            'title'=>$request->title,
            'previewLink'=>$request->previewLink,
            'thumbnailLink'=>$request->thumbnailLink,
            'details'=>$request->details
        ]);
        Toastr::success('Project Data Updated Successful', 'Update', ["positionClass" => "toast-top-center"]);
        return redirect()->route('admin.project');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        DB::table('projects')->where('id','=',$request->id)->delete();
        Toastr::warning('Project Data Deleted Successful', 'Delete', ["positionClass" => "toast-top-center"]);
        return redirect()->route('admin.project');
    }
}

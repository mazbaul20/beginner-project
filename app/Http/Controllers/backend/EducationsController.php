<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class EducationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $educations = DB::table('educations')->get();
        return view('backend.pages.Resume_Education',compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.component.create_education');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('educations')->insert([
            'duration'=>$request->duration,
            'institutionName'=>$request->institutionName,
            'field'=>$request->field,
            'details'=>$request->details,
        ]);
        return redirect()->route('admin.educations');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $educationData = DB::table('educations')->find($request->id);
        return view('backend.component.edit_education',compact('educationData'));
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
        DB::table('educations')->where('id',$request->id)->update([
            // $request->input()
            'duration'=>$request->duration,
            'institutionName'=>$request->institutionName,
            'field'=>$request->field,
            'details'=>$request->details,
        ]);
        return redirect()->route('admin.educations');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        DB::table('educations')->where('id','=',$request->id)->delete();
        return redirect()->route('admin.educations');
    }
}

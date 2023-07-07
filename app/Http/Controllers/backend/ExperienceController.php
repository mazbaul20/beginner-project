<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiences = DB::table('experiences')->get();
        return view('backend.pages.Resume_Experience',compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.component.create_experience');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('experiences')->insert([
            'duration'      => $request->duration,
            'title'         => $request->title,
            'designation'   => $request->designation,
            'details'       => $request->details,
        ]);
        return redirect()->route('admin.experience');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $experience = DB::table('experiences')->find($request->id);
        return view('backend.component.experiences-editForm',compact('experience'));
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
            'duration' => 'required|string',
            'title' => 'required|string',
            'designation' => 'required|string',
            'details' => 'required|string',
        ]);
        DB::table('experiences')->where('id',$id)->update([
            'duration' => $request->duration,
            'title' => $request->title,
            'designation' => $request->designation,
            'details' => $request->details,
        ]);
        return redirect()->route('admin.experience');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        DB::table('experiences')->where('id','=',$request->id)->delete();
        return redirect()->route('admin.experience');
    }
}

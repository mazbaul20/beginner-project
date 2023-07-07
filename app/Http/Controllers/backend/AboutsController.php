<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AboutsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $showData = DB::table('abouts')->get();
        return view('backend.pages.Abouts',compact('showData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.component.create-abouts');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|string',
            'details'=>'required|string',
        ]);
        DB::table('abouts')->insert([
            'title'=>$request->title,
            'details'=>$request->details,
        ]);
        return redirect()->route('admin.abouts');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $showData = DB::table('abouts')->find($request->id);
        return view('backend.pages.Abouts-form',compact('showData'));
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
            'title'=>'required|string',
            'details'=>'required|string',
        ]);
        DB::table('abouts')->where('id',$id)->update([
            'title'=>$request->title,
            'details'=>$request->details,
        ]);
        return redirect()->route('admin.abouts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        DB::table('abouts')->where('id','=',$id)->delete();
        return redirect()->route('admin.abouts');
    }
}

<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class SEOPropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seoproperties = DB::table('seoproperties')->get();
        return view('backend.pages.SEOProperty',compact('seoproperties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $seoProterty = DB::table('seoproperties')->find($request->id);
        return view('backend.component.edit_seoProperty',compact('seoProterty'));
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
        DB::table('seoproperties')->where('id',$request->input('id'))->update([
            'pageName'=>$request->input('pageName'),
            'title'=>$request->input('title'),
            'keywords'=>$request->input('keywords'),
            'description'=>$request->input('description'),
            'ogSiteName'=>$request->input('ogSiteName'),
            'ogUrl'=>$request->input('ogUrl'),
            'ogTitle'=>$request->input('ogTitle'),
            'ogDescription'=>$request->input('ogDescription'),
            'ogImage'=>$request->input('ogImage'),
        ]);
        Toastr::success('SEO-Property Data Updated Successful', 'Update', ["positionClass" => "toast-top-center"]);
        return redirect()->route('admin.seoProperty');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rom;
use App\Phone;
class RomsController extends Controller
{
    public function __construct()
    {
        //
      $this->middleware('auth',['except' => ['show', 'index']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $rom = new Rom;
        $rom->name = $request->input('name');
        $rom->phone_id = $request->input('phone_id');
        $rom->description = $request->input('description');
        $rom->link = $request->input('link');
        $rom->version = $request->input('version');
        $rom->android_version = $request->input('android_version');
        $rom->developer = $request->input('developer');
        $rom->image_url = $request->input('image_url');
        $rom->date = $request->input('date');
        $rom->save();
        return view('admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $roms = Rom::findOrFail($id);
       
        return view('roms.show')->with('roms',$roms);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $roms = Rom::findorfail($id);
        $roms->delete();
        return redirect('admin/viewrom')->with('success','Deleted');
    }
}

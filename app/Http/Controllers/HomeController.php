<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phone;
use App\Rom;
class HomeController extends Controller
{
    public function __construct()
    {
        //
      $this->middleware('auth');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.index');
    }
    public function addphone()
    {
       return view('admin.add-phone');
    }
    public function addrom()
    {
        $phones= Phone::all();
       return view('admin.add-rom')->with('phones',$phones);
    }
    public function viewphone()
    {
       $phones= Phone::orderBy('build_year','desc')->get();
       return view('admin.view-phone')->with('phones',$phones);
    }
    public function viewrom()
    {
       $roms= Rom::orderBy('date','desc')->get();
       return view('admin.view-rom')->with('roms',$roms);
    }
    public function editphone($id)
    {
     $phone= Phone::findOrFail($id);
     return view('admin.edit-phone')->with('phone',$phone);
    }
}

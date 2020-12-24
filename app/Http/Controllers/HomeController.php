<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phone;
use App\Rom;
use App\Kernel;
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
      $phones= Phone::all();
       $roms= Rom::all();
       $kernels= Kernel::all();
        return view('admin.index')->with('phones',$phones)->with('kernels',$kernels)->with('roms',$roms);
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
    public function addkernel()
    {
        $phones= Phone::all();
       return view('admin.add-kernel')->with('phones',$phones);
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
    public function viewkernel()
    {
       $kernels= Kernel::orderBy('date','desc')->get();
       return view('admin.view-kernel')->with('kernels',$kernels);
    }
    public function editphone($id)
    {
     $phone= Phone::findOrFail($id);
     return view('admin.edit-phone')->with('phone',$phone);
    }
    public function editrom($id)
    {
      $phones= Phone::all();
     $rom= Rom::findOrFail($id);
     return view('admin.edit-rom')->with('phones',$phones)->with('rom',$rom);
    }
}

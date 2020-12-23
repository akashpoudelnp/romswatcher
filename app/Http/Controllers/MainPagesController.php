<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phone;
use App\Rom;
use App\Manufacturer;
class MainPagesController extends Controller
{
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
        $phones= Phone::orderBy('build_year','desc')->limit(3)->get();
         $roms= Rom::orderBy('created_at','desc')->paginate(5);
        return view('main.index')->with('phones',$phones)->with('roms',$roms);
    }
    public function autocomplete(Request $request)
    {
        $data = Phone::select("id","name","code_name","image_url")->where("name","LIKE","%{$request->input('query')}%")->orWhere("code_name","LIKE","%{$request->input('query')}%")->get();
        return response()->json($data);
    }
    public function devices()
    {
        $phones = Phone::orderBy('created_at')->get()->groupBy('manufacturer');
       
       return view('main.devices')->with('phones',$phones);
    }
}

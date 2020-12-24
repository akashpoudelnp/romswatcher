<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kernel;
use App\Phone;
use App\Rom;
class KernelsController extends Controller
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
        $kernels = Kernel::orderBy('created_at')->get()->groupBy('developer');
        return view('main.kernels')->with('kernels',$kernels);
          
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
        $kernel = new Kernel;
        $kernel->name = $request->input('name');
        $kernel->phone_id = $request->input('phone_id');
        $kernel->description = $request->input('description');
        $kernel->link = $request->input('link');
        $kernel->version = $request->input('version');
        $kernel->android_version = $request->input('android_version');
        $kernel->developer = $request->input('developer');
        $kernel->image_url = $request->input('image_url');
        $kernel->date = $request->input('date');
        $kernel->save();
        return redirect('/admin');
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
        $kernels = Kernel::findOrFail($id);
       
        return view('kernels.show')->with('kernels',$kernels);
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
     * Remove the specified resource fkernel storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $kernels = Kernel::findorfail($id);
        $kernels->delete();
        return redirect('admin/viewkernel')->with('success','Deleted');
    }
}

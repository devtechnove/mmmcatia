<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
   

     public function __construct()
    {
        $this->middleware('permission:VerCargo')->only('index'); 
        $this->middleware('permission:RegistrarCargo')->only('create');
        $this->middleware('permission:RegistrarCargo')->only('store');
        $this->middleware('permission:EditarCargo')->only('edit');
        $this->middleware('permission:EditarCargo')->only('update');
        $this->middleware('permission:VerCargo')->only('show'); 

    }





    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $academias = Cargo::get();
        return view('admin.cargo.index',compact('academias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cargo =new Cargo();
        $cargo->name = $request->name;
        $cargo->status = $request->status;
        $cargo->user_id = \Auth::user()->id;
        $cargo->save();

        return \Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pais  $cargo
     * @return \Illuminate\Http\Response
     */
    public function show(Pais $cargo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pais  $cargo
     * @return \Illuminate\Http\Response 
     */
    public function edit(Pais $cargo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pais  $cargo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $estadocivil)
    {   //dd($request);
        $cargo = Cargo::find($estadocivil);
        $cargo->name = $request->name;
        $cargo->status = $request->status;
        $cargo->user_id = \Auth::user()->id;
        $cargo->save();

        return \Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pais  $cargo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pais $cargo)
    {
        //
    }
}

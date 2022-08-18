<?php

namespace App\Http\Controllers;

use App\Models\GradoInstruccion;
use Illuminate\Http\Request;

class GradoInstruccionController extends Controller
{
     

     public function __construct()
    {
        $this->middleware('permission:VerGradoInstruccion')->only('index'); 
        $this->middleware('permission:RegistrarGradoInstruccion')->only('create');
        $this->middleware('permission:RegistrarGradoInstruccion')->only('store');
        $this->middleware('permission:EditarGradoInstruccion')->only('edit');
        $this->middleware('permission:EditarGradoInstruccion')->only('update');
        $this->middleware('permission:VerGradoInstruccion')->only('show'); 

    }


     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $academias = GradoInstruccion::get();
        return view('admin.gradoinstruccion.index',compact('academias'));
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
        $pais =new GradoInstruccion();
        $pais->name = $request->name;
        $pais->status = $request->status;
        $pais->save();

        return \Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pais  $pais
     * @return \Illuminate\Http\Response
     */
    public function show(Pais $pais)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pais  $pais
     * @return \Illuminate\Http\Response
     */
    public function edit(Pais $pais)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pais  $pais
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $estadocivil)
    {   //dd($request);
        $pais = GradoInstruccion::find($estadocivil);
        $pais->name = $request->name;
        $pais->status = $request->status;
        $pais->save();

        return \Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pais  $pais
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pais $pais)
    {
        //
    }
}

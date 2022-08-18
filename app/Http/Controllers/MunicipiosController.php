<?php

namespace App\Http\Controllers;

use App\Models\Municipios;
use Illuminate\Http\Request;

class MunicipiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $academias = Municipios::get();
        return view('admin.municipio.index',compact('academias'));
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
        $municipios = new Municipios();
        $municipios->municipio = $request->municipio;
        $municipios->status = $request->status;
        $municipios->user_id = \Auth::user()->id;
        $municipios->estado_id = $request->estado_id;
        $municipios->save();

        return \Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pais  $municipios
     * @return \Illuminate\Http\Response
     */
    public function show(Pais $municipios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pais  $municipios
     * @return \Illuminate\Http\Response 
     */
    public function edit(Pais $municipios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pais  $municipios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $estadocivil)
    {   //dd($request);
        $municipios = Municipios::find($estadocivil);
        $municipios->municipio = $request->municipio;
        $municipios->status = $request->status;
        $municipios->user_id = \Auth::user()->id;
        $municipios->estado_id = $request->estado_id;
        $municipios->save();

        return \Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pais  $municipios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pais $municipios)
    {
        //
    }
}

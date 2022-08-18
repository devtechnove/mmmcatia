<?php

namespace App\Http\Controllers;

use App\Models\DiaServicio;
use Illuminate\Http\Request;

class DiaServicioController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:VerDiaServicio')->only('index'); 
        $this->middleware('permission:RegistrarDiaServicio')->only('create');
        $this->middleware('permission:RegistrarDiaServicio')->only('store');
        $this->middleware('permission:EditarDiaServicio')->only('edit');
        $this->middleware('permission:EditarDiaServicio')->only('update');
        $this->middleware('permission:VerDiaServicio')->only('show'); 

    }





    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $academias = DiaServicio::get();
        return view('admin.dia_servicio.index',compact('academias'));
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
        $servicio =new DiaServicio();
        $servicio->name = $request->name;
        $servicio->dia_servicio = $request->dia_servicio;
        $servicio->hora_inicio_servicio = $request->hora_inicio_servicio;
        $servicio->hora_fin_servicio = $request->hora_fin_servicio;
        $servicio->status = $request->status;
        $servicio->user_id = \Auth::user()->id;
        $servicio->save();

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

        $servicio = DiaServicio::find($estadocivil);
        $servicio->name = $request->name;
        $servicio->dia_servicio = $request->dia_servicio;
        $servicio->hora_inicio_servicio = $request->hora_inicio_servicio;
        $servicio->hora_fin_servicio = $request->hora_fin_servicio;
        $servicio->status = $request->status;
        $servicio->user_id = \Auth::user()->id;
        $servicio->save();

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

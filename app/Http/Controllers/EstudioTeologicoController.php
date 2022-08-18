<?php

namespace App\Http\Controllers;

use App\Models\EstudioTeologico;
use Illuminate\Http\Request;

class EstudioTeologicoController extends Controller
{

     public function __construct()
    {
        $this->middleware('permission:VerEstudioTeologico')->only('index'); 
        $this->middleware('permission:RegistrarEstudioTeologico')->only('create');
        $this->middleware('permission:RegistrarEstudioTeologico')->only('store');
        $this->middleware('permission:EditarEstudioTeologico')->only('edit');
        $this->middleware('permission:EditarEstudioTeologico')->only('update');
        $this->middleware('permission:VerEstudioTeologico')->only('show'); 

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudio = EstudioTeologico::get();
        
        return view('admin.estudio.index',compact('estudio'));
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
        $estudio = new EstudioTeologico();
        $estudio->estudio_teologico = $request->estudio_teologico;
        $estudio->nombre_instituto = $request->nombre_instituto;
        $estudio->titulo_instituto = $request->titulo_instituto;
        $estudio->tiempo_instituto = $request->tiempo_instituto;
        $estudio->tipo_teologico = $request->tipo_teologico;
        $estudio->user_id = \Auth::user()->id;
        $estudio->miembro_id = $request->miembro_id;

        $estudio->save();

        return redirect()->to('miembros');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EstudioTeologico  $estudioTeologico
     * @return \Illuminate\Http\Response
     */
    public function show(EstudioTeologico $estudioTeologico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EstudioTeologico  $estudioTeologico
     * @return \Illuminate\Http\Response
     */
    public function edit(EstudioTeologico $estudioTeologico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EstudioTeologico  $estudioTeologico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $estudioTeologico)
    {
        $estudio = EstudioTeologico::find($estudioTeologico);
        $estudio->estudio_teologico = $request->estudio_teologico;
        $estudio->nombre_instituto = $request->nombre_instituto;
        $estudio->titulo_instituto = $request->titulo_instituto;
        $estudio->tiempo_instituto = $request->tiempo_instituto;
        $estudio->tipo_teologico = $request->tipo_teologico;
        $estudio->user_id = \Auth::user()->id;
       // $estudio->miembro_id = $request->miembro_id;

        $estudio->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EstudioTeologico  $estudioTeologico
     * @return \Illuminate\Http\Response
     */
    public function destroy(EstudioTeologico $estudioTeologico)
    {
        //
    }
}

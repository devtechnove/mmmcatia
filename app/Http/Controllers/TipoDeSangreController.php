<?php

namespace App\Http\Controllers;

use App\Models\TipoDeSangre;
use Illuminate\Http\Request;

class TipoDeSangreController extends Controller
{ 
     public function __construct()
    {
        $this->middleware('permission:VerTipoSangre')->only('index'); 
        $this->middleware('permission:RegistrarTipoSangre')->only('create');
        $this->middleware('permission:RegistrarTipoSangre')->only('store');
        $this->middleware('permission:EditarTipoSangre')->only('edit');
        $this->middleware('permission:EditarTipoSangre')->only('update');
        $this->middleware('permission:VerTipoSangre')->only('show'); 

    }


    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $academias = TipoDeSangre::get();
        return view('admin.tipodesangre.index',compact('academias'));
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
        $tipodesangre = new TipoDeSangre();
        $tipodesangre->name = $request->name;
        $tipodesangre->status = $request->status;
        $tipodesangre->save();

        return \Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoDeSangre  $tipoDeSangre
     * @return \Illuminate\Http\Response
     */
    public function show(TipoDeSangre $tipoDeSangre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoDeSangre  $tipoDeSangre
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoDeSangre $tipoDeSangre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoDeSangre  $tipoDeSangre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $tipoDeSangre)
    {
        $tipodesangre = TipoDeSangre::find($tipoDeSangre);
        $tipodesangre->name = $request->name;
        $tipodesangre->status = $request->status;
        $tipodesangre->save();

        return \Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoDeSangre  $tipoDeSangre
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoDeSangre $tipoDeSangre)
    {
        //
    }
}

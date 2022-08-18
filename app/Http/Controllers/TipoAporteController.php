<?php

namespace App\Http\Controllers;

use App\Models\TipoAporte;
use Illuminate\Http\Request;

class TipoAporteController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:VerTipoAporte')->only('index'); 
        $this->middleware('permission:RegistrarTipoAporte')->only('create');
        $this->middleware('permission:RegistrarTipoAporte')->only('store');
        $this->middleware('permission:EditarTipoAporte')->only('edit');
        $this->middleware('permission:EditarTipoAporte')->only('update');
        $this->middleware('permission:VerTipoAporte')->only('show'); 

    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $academias  = TipoAporte::orderBy('created_at', 'desc')
                       ->get();

        return view('admin.tipoaporte.index',compact('academias'));
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
        $aporte = new TipoAporte();
        $aporte->name = $request->name;
        $aporte->status = $request->status;
        $aporte->user_id = \Auth::user()->id;

        $aporte->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoAporte  $tipoAporte
     * @return \Illuminate\Http\Response
     */
    public function show(TipoAporte $tipoAporte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoAporte  $tipoAporte
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoAporte $tipoAporte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoAporte  $tipoAporte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $aporte)
    {
        $aporte = TipoAporte::find($aporte);
        $aporte->name = $request->name;
        $aporte->status = $request->status;
        $aporte->user_id = \Auth::user()->id;

        $aporte->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoAporte  $tipoAporte
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoAporte $tipoAporte)
    {
        //
    }
}

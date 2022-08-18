<?php

namespace App\Http\Controllers;

use App\Models\TipoLider;
use Illuminate\Http\Request;

class TipoLiderController extends Controller
{
     public function __construct()
    {
        $this->middleware('permission:VerTipoLider')->only('index'); 
        $this->middleware('permission:RegistrarTipoLider')->only('create');
        $this->middleware('permission:RegistrarTipoLider')->only('store');
        $this->middleware('permission:EditarTipoLider')->only('edit');
        $this->middleware('permission:EditarTipoLider')->only('update');
        $this->middleware('permission:VerTipoLider')->only('show'); 

    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $academias  = TipoLider::orderBy('created_at', 'desc')
                       ->get();

        return view('admin.tipolider.index',compact('academias'));
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
        $aporte = new TipoLider();
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
        $aporte = TipoLider::find($aporte);
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

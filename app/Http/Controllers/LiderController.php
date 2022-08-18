<?php

namespace App\Http\Controllers;

use App\Models\Lider;
use Illuminate\Http\Request;

class LiderController extends Controller
{
     public function __construct()
    {
        $this->middleware('permission:VerLider')->only('index'); 
        $this->middleware('permission:RegistrarLider')->only('create');
        $this->middleware('permission:RegistrarLider')->only('store');
        $this->middleware('permission:EditarLider')->only('edit');
        $this->middleware('permission:EditarLider')->only('update');
        $this->middleware('permission:VerLider')->only('show'); 

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $academias = Lider::get();
        
        return view('admin.lider.index',compact('academias'));
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
        $estudio = new Lider();
        $estudio->tipo_lider_id = $request->tipo_lider_id;
        $estudio->ano_ingreso = $request->ano_ingreso;
        $estudio->user_id = \Auth::user()->id;
        $estudio->miembro_id = $request->miembro_id;
        $estudio->status = $request->status;

        $estudio->save();

        return redirect()->to('lider');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lider  $Lider
     * @return \Illuminate\Http\Response
     */
    public function show(Lider $Lider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lider  $Lider
     * @return \Illuminate\Http\Response
     */
    public function edit(Lider $Lider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lider  $Lider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $lider)
    {
        $estudio = Lider::find($lider);
        $estudio->tipo_lider_id = $request->tipo_lider_id;
        $estudio->ano_ingreso = $request->ano_ingreso;
        $estudio->user_id = \Auth::user()->id;
        $estudio->miembro_id = $request->miembro_id;
        $estudio->status = $request->status;

        $estudio->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lider  $Lider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lider $Lider)
    {
        //
    }
}

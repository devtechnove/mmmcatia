<?php

namespace App\Http\Controllers;

use App\Models\Gasto;
use Illuminate\Http\Request;

class GastoController extends Controller
{
    /* public function __construct()
    {
        $this->middleware('permission:VerGasto')->only('index'); 
        $this->middleware('permission:RegistrarGasto')->only('create');
        $this->middleware('permission:RegistrarGasto')->only('store');
        $this->middleware('permission:EditarGasto')->only('edit');
        $this->middleware('permission:EditarGasto')->only('update');
        $this->middleware('permission:VerGasto')->only('show'); 

    }*/


     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $academias = Gasto::get();
        return view('admin.gastos.index',compact('academias'));
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
        // Available alpha caracters
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        // generate a pin based on 2 * 7 digits + a random character
        $pin = mt_rand(1000000, 9999999)
            . mt_rand(1000000, 9999999)
            . $characters[rand(0, strlen($characters) - 1)];

        // shuffle the result
        $string = str_shuffle($pin);




        //dd($request);

        $ofrenda = new Gasto();
        $ofrenda->total_pagar = $request->total_pagar;
        $ofrenda->fecha = $request->fecha;
        $ofrenda->mes = date('m');
        $ofrenda->year = date('Y');
        $ofrenda->hora = date('H:m:i');
        $ofrenda->tx_descripcion = $request->tx_descripcion;
        //$ofrenda->dia_servicio_id = $request->dia_servicio_id;
        $ofrenda->serie = $string;
        $ofrenda->user_id = \Auth::user()->id;
        $ofrenda->tipo_gasto_id = $request->tipo_gasto_id;
        $ofrenda->status = $request->status;

        $ofrenda->save();


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
    public function update(Request $request,  $aporte)
    {   //dd($request);

        $ofrenda =Gasto::find($aporte);

        $ofrenda->total_pagar = $request->total_pagar;
        $ofrenda->fecha = $request->fecha;
        //$ofrenda->mes = date('m');
        //$ofrenda->year = date('Y');
        //$ofrenda->hora = date('H:m:i');
        $ofrenda->tx_descripcion = $request->tx_descripcion;
        //$ofrenda->dia_servicio_id = $request->dia_servicio_id;
        //$ofrenda->serie = $string;
        $ofrenda->user_id = \Auth::user()->id;
        $ofrenda->status = $request->status;
        $ofrenda->tipo_gasto_id = $request->tipo_gasto_id;

        $ofrenda->save();

        

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

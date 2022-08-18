<?php

namespace App\Http\Controllers;

use App\Models\Aporte;
use App\Models\DetalleAporte; 

use Illuminate\Http\Request;

class AporteController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $academias = Aporte::get();
        return view('admin.aportes.index',compact('academias'));
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

        $aportes = new Aporte();
        $aportes->total_pagar = $request->total_pagar;
        $aportes->fecha = $request->fecha;
        $aportes->mes = date('m');
        $aportes->year = date('Y');
        $aportes->hora = date('H:m:i');
        $aportes->tx_descripcion = $request->tx_descripcion;
        $aportes->tipo_aporte_id = $request->tipo_aporte_id;
        $aportes->serie = $string;
        $aportes->user_id = \Auth::user()->id;
        $aportes->status = $request->status;

        $aportes->save();


        $detalleaportes = new DetalleAporte();
        $detalleaportes->cantidad = $aportes->total_pagar;
        $detalleaportes->aporte_id =$aportes->id;
        $detalleaportes->save();


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

        $aportes =Aporte::find($aporte);

        $aportes->total_pagar = $request->total_pagar;
        $aportes->fecha = $request->fecha;
        $aportes->tx_descripcion = $request->tx_descripcion;
        $aportes->tipo_aporte_id = $request->tipo_aporte_id;
        $aportes->user_id = \Auth::user()->id;
        $aportes->status = $request->status;

        $aportes->save();


        $detalleaportes = DetalleAporte::where('aporte_id',$aporte)->first();
        $detalleaportes->cantidad = $aportes->total_pagar;
        $detalleaportes->aporte_id =$aportes->id;
        $detalleaportes->save();


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

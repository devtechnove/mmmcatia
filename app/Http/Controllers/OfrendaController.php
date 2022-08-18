<?php

namespace App\Http\Controllers;

use App\Models\Ofrenda;
use Illuminate\Http\Request;

class OfrendaController extends Controller
 {   
        public function __construct()
        {  
                $this->middleware('permission:VerOfrenda')->only('index'); 
                $this->middleware('permission:RegistrarOfrenda')->only('create');
                $this->middleware('permission:RegistrarOfrenda')->only('store');
                $this->middleware('permission:EditarOfrenda')->only('edit');
                $this->middleware('permission:EditarOfrenda')->only('update');
                $this->middleware('permission:VerOfrenda')->only('show'); 
        }


     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $academias = Ofrenda::get();
        return view('admin.ofrendas.index',compact('academias'));
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

        $ofrenda = new Ofrenda();
        $ofrenda->total_pagar = $request->total_pagar;
        $ofrenda->fecha = $request->fecha;
        $ofrenda->mes = date('m');
        $ofrenda->year = date('Y');
        $ofrenda->hora = date('H:m:i');
        $ofrenda->tx_descripcion = $request->tx_descripcion;
        $ofrenda->dia_servicio_id = $request->dia_servicio_id;
        $ofrenda->serie = $string;
        $ofrenda->user_id = \Auth::user()->id;
        $ofrenda->tipo_aporte_id = $request->tipo_aporte_id;
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

        $ofrenda =Ofrenda::find($aporte);

        $ofrenda->total_pagar = $request->total_pagar;
        $ofrenda->fecha = $request->fecha;
        //$ofrenda->mes = date('m');
        //$ofrenda->year = date('Y');
        //$ofrenda->hora = date('H:m:i');
        $ofrenda->tx_descripcion = $request->tx_descripcion;
        $ofrenda->dia_servicio_id = $request->dia_servicio_id;
        //$ofrenda->serie = $string;
        $ofrenda->user_id = \Auth::user()->id;
        $ofrenda->status = $request->status;
        $ofrenda->tipo_aporte_id = $request->tipo_aporte_id;

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

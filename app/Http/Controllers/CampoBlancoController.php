<?php

namespace App\Http\Controllers;

use App\Models\CampoBlanco;
use App\Models\DetalleCampoBlanco;
use Illuminate\Http\Request;

class CampoBlancoController extends Controller
{
     public function __construct()
    {
        $this->middleware('permission:VerCampoBlanco')->only('index'); 
        $this->middleware('permission:RegistrarCampoBlanco')->only('create');
        $this->middleware('permission:RegistrarCampoBlanco')->only('store');
        $this->middleware('permission:EditarCampoBlanco')->only('edit');
        $this->middleware('permission:EditarCampoBlanco')->only('update');
        $this->middleware('permission:VerCampoBlanco')->only('show'); 

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
           $miembros = CampoBlanco::get();
           return view('admin.campoblanco.index', compact('miembros'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.campoblanco.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 

        //dd($request);

     $validated = $request->validate([

        'name'=>'required',
        'direccion'=>'required',
        'ano_fundada'=>'required',
        'status'=>'required',
        'miembro_id'=>'required',
        'estado_id'=>'required',
        'municipio_id'=>'required',
        'parroquia_id'=>'required',
        ]);

        $miembro = new CampoBlanco();
        $miembro->name = $request->name;
        $miembro->direccion = $request->direccion;
        $miembro->ano_fundada = $request->ano_fundada;
        $miembro->status = $request->status;
        $miembro->miembro_id = $request->miembro_id;
        $miembro->estado_id = $request->estado_id;
        $miembro->municipio_id = $request->municipio_id;
        $miembro->parroquia_id = $request->parroquia_id;
        $miembro->user_id = \Auth::user()->id;
       

        $miembro->save();

         return redirect()->back();




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Miembro  $miembro
     * @return \Illuminate\Http\Response
     */
    public function detalle($campo_blanco)
    {   //dd($campo_blanco);
        return view('admin.campoblanco.detalle',compact('campo_blanco'));
         
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Miembro  $miembro
     * @return \Illuminate\Http\Response
     */
    public function verdetalle($campo_blanco)
    {   $element = DetalleCampoBlanco::find($campo_blanco);
        return view('admin.campoblanco.verdetalle',compact('element'));
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Miembro  $miembro
     * @return \Illuminate\Http\Response
     */
    public function edit($miembro)
    {
         $miembros = CampoBlanco::find($miembro);
         //dd($miembros);
        return view('admin.campoblanco.edit', compact('miembros'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Miembro  $miembro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $miembro)
    {

        $validated = $request->validate([
         'name'=>'required',
        'direccion'=>'required',
        'ano_fundada'=>'required',
        'status'=>'required',
        'miembro_id'=>'required',
        'estado_id'=>'required',
        'municipio_id'=>'required',
        'parroquia_id'=>'required',
        ]);

        $miembro = CampoBlanco::find($miembro);
        $miembro->name = $request->name;
        $miembro->direccion = $request->direccion;
        $miembro->ano_fundada = $request->ano_fundada;
        $miembro->status = $request->status;
        $miembro->miembro_id = $request->miembro_id;
        $miembro->estado_id = $request->estado_id;
        $miembro->municipio_id = $request->municipio_id;
        $miembro->parroquia_id = $request->parroquia_id;
        $miembro->user_id = \Auth::user()->id;
       

        $miembro->save();

         return redirect()->to('campoblanco');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Miembro  $miembro
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        $detalle = new  DetalleCampoBlanco();

        $detalle->dia_servicio = $request->dia_servicio;
        $detalle->cantidad_damas = $request->cantidad_damas;
        $detalle->cantidad_caballeros = $request->cantidad_caballeros;
        $detalle->cantidad_jovenes = $request->cantidad_jovenes;
        $detalle->cantidad_ninos = $request->cantidad_ninos;
        $detalle->tx_observacion = $request->tx_observacion;
        $detalle->user_id = $request->user_id;
        $detalle->campo_blanco_id = $request->campo_blanco_id;
        $detalle->status = $request->status;
        $detalle->user_id = \Auth::user()->id ;

        $detalle->save();

        return redirect()->to('campoblanco');


    }
}

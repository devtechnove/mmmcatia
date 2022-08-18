<?php

namespace App\Http\Controllers;

use App\Models\Hijo;
use Illuminate\Http\Request; 
 
class HijoController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
           $miembros = Hijo::get();

           return view('admin.hijo.index', compact('miembros'));
      
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
       


        return view('admin.hijo.create',compact('id'));
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        

         $validated = $request->validate([

        'name'=>'required',
        'lastname'=>'required',
        'email'=>'required',
        'telefono'=>'required',
        'fecha_nacimiento'=>'required',
        'lugar_nacimiento'=>'required',
        'tipo_documento'=>'required',
        'documento'=>'required|unique:miembros',
        //'direccion'=>'required',
        'edad'=>'required',
        'ano_ingreso'=>'required',
        'status'=>'required',
        'genero_id'=>'required',
        'estado_civil_id'=>'required',
        'nacionalidad_id'=>'required',
        'tipo_sangre_id'=>'required',
        'pais_id'=>'required',
        'grado_instruccion_id'=>'required',
        'sociedad_id'=>'required',
        'tipo_miembro_id'=>'required',
        ]);

         if ($request->edad < 19) {
        
            $miembro = new Hijo();
            $miembro->name = $request->name;
            $miembro->lastname = $request->lastname;
            $miembro->email = $request->email;
            $miembro->telefono = $request->telefono;
            $miembro->fecha_nacimiento = $request->fecha_nacimiento;
            $miembro->lugar_nacimiento = $request->lugar_nacimiento;
            $miembro->tipo_documento = $request->tipo_documento;
            $miembro->documento = $request->documento;
            //$miembro->direccion = $request->direccion;
            $miembro->edad = $request->edad;
            //$miembro->ano_ingreso = $request->ano_ingreso;
            //$miembro->status = $request->status;
            $miembro->genero_id = $request->genero_id;
            $miembro->estado_civil_id = $request->estado_civil_id;
            $miembro->nacionalidad_id = $request->nacionalidad_id;
            $miembro->tipo_sangre_id = $request->tipo_sangre_id;
            $miembro->pais_id = $request->pais_id;
            $miembro->grado_instruccion_id = $request->grado_instruccion_id;
            $miembro->sociedad_id = 5;
            $miembro->tipo_miembro_id = $request->tipo_miembro_id;
            $miembro->miembro_id = $request->miembro_id;

            $miembro->user_id =\Auth::user()->id;
            $miembro->save();

             return redirect()->to('hijo');
         }
         else
         {
            $miembro = new Hijo();
            $miembro->name = $request->name;
            $miembro->lastname = $request->lastname;
            $miembro->email = $request->email;
            $miembro->telefono = $request->telefono;
            $miembro->fecha_nacimiento = $request->fecha_nacimiento;
            $miembro->lugar_nacimiento = $request->lugar_nacimiento;
            $miembro->tipo_documento = $request->tipo_documento;
            $miembro->documento = $request->documento;
            //$miembro->direccion = $request->direccion;
            $miembro->edad = $request->edad;
            //$miembro->ano_ingreso = $request->ano_ingreso;
            //$miembro->status = $request->status;
            $miembro->genero_id = $request->genero_id;
            $miembro->estado_civil_id = $request->estado_civil_id;
            $miembro->nacionalidad_id = $request->nacionalidad_id;
            $miembro->tipo_sangre_id = $request->tipo_sangre_id;
            $miembro->pais_id = $request->pais_id;
            $miembro->grado_instruccion_id = $request->grado_instruccion_id;
            $miembro->sociedad_id = 4;
            $miembro->tipo_miembro_id = $request->tipo_miembro_id;
            $miembro->miembro_id = $request->miembro_id;

            $miembro->user_id =\Auth::user()->id;
            $miembro->save();

             return redirect()->to('hijo');
         }

       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hijo  $hijo
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
         return view('admin.hijo.create',compact('id')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hijo  $hijo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $miembros = Hijo::find($id);
         //dd($miembros);
        return view('admin.hijo.edit', compact('miembros','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hijo  $hijo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $hijo)
    {
       //dd($request);

         $validated = $request->validate([

        'name'=>'required',
        'lastname'=>'required',
        'email'=>'required',
        'telefono'=>'required',
        'fecha_nacimiento'=>'required',
        'lugar_nacimiento'=>'required',
        'tipo_documento'=>'required',
        'documento'=>'required|unique:miembros',
        //'direccion'=>'required',
        'edad'=>'required',
        'ano_ingreso'=>'required',
        'status'=>'required',
        'genero_id'=>'required',
        'estado_civil_id'=>'required',
        'nacionalidad_id'=>'required',
        'tipo_sangre_id'=>'required',
        'pais_id'=>'required',
        'grado_instruccion_id'=>'required',
        'sociedad_id'=>'required',
        'tipo_miembro_id'=>'required',
        ]);

        if ($request->edad < 19) {
        
            $miembro =Hijo::find($hijo);
            $miembro->name = $request->name;
            $miembro->lastname = $request->lastname;
            $miembro->email = $request->email;
            $miembro->telefono = $request->telefono;
            $miembro->fecha_nacimiento = $request->fecha_nacimiento;
            $miembro->lugar_nacimiento = $request->lugar_nacimiento;
            $miembro->tipo_documento = $request->tipo_documento;
            $miembro->documento = $request->documento;
            //$miembro->direccion = $request->direccion;
            $miembro->edad = $request->edad;
            //$miembro->ano_ingreso = $request->ano_ingreso;
            //$miembro->status = $request->status;
            $miembro->genero_id = $request->genero_id;
            $miembro->estado_civil_id = $request->estado_civil_id;
            $miembro->nacionalidad_id = $request->nacionalidad_id;
            $miembro->tipo_sangre_id = $request->tipo_sangre_id;
            $miembro->pais_id = $request->pais_id;
            $miembro->grado_instruccion_id = $request->grado_instruccion_id;
            $miembro->sociedad_id = 5;
            $miembro->tipo_miembro_id = $request->tipo_miembro_id;
            $miembro->miembro_id = $request->miembro_id;

            $miembro->user_id =\Auth::user()->id;
            $miembro->save();

             return redirect()->to('hijo');
         }
         else
         {
            $miembro =Hijo::find($hijo);
            $miembro->name = $request->name;
            $miembro->lastname = $request->lastname;
            $miembro->email = $request->email;
            $miembro->telefono = $request->telefono;
            $miembro->fecha_nacimiento = $request->fecha_nacimiento;
            $miembro->lugar_nacimiento = $request->lugar_nacimiento;
            $miembro->tipo_documento = $request->tipo_documento;
            $miembro->documento = $request->documento;
            //$miembro->direccion = $request->direccion;
            $miembro->edad = $request->edad;
            //$miembro->ano_ingreso = $request->ano_ingreso;
            //$miembro->status = $request->status;
            $miembro->genero_id = $request->genero_id;
            $miembro->estado_civil_id = $request->estado_civil_id;
            $miembro->nacionalidad_id = $request->nacionalidad_id;
            $miembro->tipo_sangre_id = $request->tipo_sangre_id;
            $miembro->pais_id = $request->pais_id;
            $miembro->grado_instruccion_id = $request->grado_instruccion_id;
            $miembro->sociedad_id = 3;
            $miembro->tipo_miembro_id = $request->tipo_miembro_id;
            $miembro->miembro_id = $request->miembro_id;

            $miembro->user_id =\Auth::user()->id;
            $miembro->save();

             return redirect()->to('hijo');
         }

    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hijo  $hijo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hijo $hijo)
    {
        //
    }
}

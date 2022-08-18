<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use Illuminate\Http\Request;

class GeneroController extends Controller
{



     public function __construct()
    {
        $this->middleware('permission:VerGenero')->only('index'); 
        $this->middleware('permission:RegistrarGenero')->only('create');
        $this->middleware('permission:RegistrarGenero')->only('store');
        $this->middleware('permission:EditarGenero')->only('edit');
        $this->middleware('permission:EditarGenero')->only('update');
        $this->middleware('permission:VerGenero')->only('show'); 

    }



    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $academias = Genero::get();
        return view('admin.genero.index',compact('academias'));
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
        $genero =new Genero();
        $genero->name = $request->name;
        $genero->status = $request->status;
        $genero->save();

        return \Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Genero  $genero
     * @return \Illuminate\Http\Response
     */
    public function show(Genero $genero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Genero  $genero
     * @return \Illuminate\Http\Response
     */
    public function edit(Genero $genero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Genero  $genero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $genero)
    {
        $genero =Genero::find($genero);
        $genero->name = $request->name;
        $genero->status = $request->status;
        $genero->save();

        return \Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Genero  $genero
     * @return \Illuminate\Http\Response
     */
    public function destroy(Genero $genero)
    {
        //
    }
}

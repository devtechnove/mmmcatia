<?php

namespace App\Http\Controllers;

use App\Models\Sociedades;
use Illuminate\Http\Request;

class SociedadesController extends Controller
{
     public function __construct()
    {
        $this->middleware('permission:VerSociedades')->only('index'); 
        $this->middleware('permission:RegistrarSociedades')->only('create');
        $this->middleware('permission:RegistrarSociedades')->only('store');
        $this->middleware('permission:EditarSociedades')->only('edit');
        $this->middleware('permission:EditarSociedades')->only('update');
        $this->middleware('permission:VerSociedades')->only('show'); 

    }


    
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $academias = Sociedades::get();
        return view('admin.sociedades.index',compact('academias'));
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
        $sociedades =new Sociedades();
        $sociedades->name = $request->name;
        $sociedades->status = $request->status;
        $sociedades->user_id = \Auth::user()->id;
        $sociedades->save();

        return \Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pais  $sociedades
     * @return \Illuminate\Http\Response
     */
    public function show(Pais $sociedades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pais  $sociedades
     * @return \Illuminate\Http\Response 
     */
    public function edit(Pais $sociedades)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pais  $sociedades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $estadocivil)
    {   //dd($request);
        $sociedades = Sociedades::find($estadocivil);
        $sociedades->name = $request->name;
        $sociedades->status = $request->status;
        $sociedades->user_id = \Auth::user()->id;
        $sociedades->save();

        return \Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pais  $sociedades
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pais $sociedades)
    {
        //
    }
}

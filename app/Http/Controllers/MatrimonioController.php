<?php

namespace App\Http\Controllers;

use App\Models\Matrimonio;
use Illuminate\Http\Request;

class MatrimonioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matrimonio = Matrimonio::get();

        return view('admin.matrimonio.index', compact('matrimonio'));
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
        $matrimonio = new Matrimonio();
        $matrimonio->tiempo_casado= $request->tiempo_casado;
        $matrimonio->fecha_casamiento= $request->fecha_casamiento;
        $matrimonio->miembro_id= $request->miembro_id;
        $matrimonio->user_id= \Auth::user()->id;

        $matrimonio->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Matrimonio  $matrimonio
     * @return \Illuminate\Http\Response
     */
    public function show(Matrimonio $matrimonio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Matrimonio  $matrimonio
     * @return \Illuminate\Http\Response
     */
    public function edit(Matrimonio $matrimonio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Matrimonio  $matrimonio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matrimonio $matrimonio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matrimonio  $matrimonio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matrimonio $matrimonio)
    {
        //
    }
}

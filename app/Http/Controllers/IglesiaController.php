<?php

namespace App\Http\Controllers;

use App\Models\Iglesia;
use Illuminate\Http\Request;

class IglesiaController extends Controller
{


     public function __construct()
    {
        $this->middleware('permission:VerIglesia')->only('index'); 
        $this->middleware('permission:RegistrarIglesia')->only('create');
        $this->middleware('permission:RegistrarIglesia')->only('store');
        $this->middleware('permission:EditarIglesia')->only('edit');
        $this->middleware('permission:EditarIglesia')->only('update');
        $this->middleware('permission:VerIglesia')->only('show'); 

    }


    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $users = Iglesia::orderBy('created_at', 'desc')
                       ->get();

        return view('admin.iglesia.index', ['users' => $users]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Iglesia  $iglesia
     * @return \Illuminate\Http\Response
     */
    public function show(Iglesia $iglesia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Iglesia  $iglesia
     * @return \Illuminate\Http\Response
     */
    public function edit(Iglesia $iglesia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Iglesia  $iglesia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Iglesia $iglesia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Iglesia  $iglesia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Iglesia $iglesia)
    {
        //
    }
}

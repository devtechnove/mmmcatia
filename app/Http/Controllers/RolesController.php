<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RolesController extends Controller
{


     public function __construct()
    {
        $this->middleware('permission:VerRole')->only('index'); 
        $this->middleware('permission:RegistrarRole')->only('create');
        $this->middleware('permission:RegistrarRole')->only('store');
        $this->middleware('permission:EditarRole')->only('edit');
        $this->middleware('permission:EditarRole')->only('update');
        $this->middleware('permission:VerRole')->only('show'); 

    }

    
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $roles = Role::get();
       $roles = $roles->each(function ($role){
       $role->count_user = User::role($role->name)->count();
     });
        return view ('admin.roles.index', compact('roles'));
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
         //dd($request);
        $role = new Role();
        $role->name         = $request->name;
        $role->guard_name   = 'web';

        $role->save();

        if ($role) {
            
            $notification = array(
            'message' => '¡Datos ingresados!',
            'alert-type' => 'success');

            return \Redirect::back()->with($notification);


        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $role =  Role::find($id);
        $role->name         = $request->name;
        $role->guard_name   = 'web';

        $role->save();

        if ($role) {
            
            $notification = array(
            'message' => '¡Datos ingresados!',
            'alert-type' => 'success');

            return \Redirect::back()->with($notification);


        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function borrar($id)
    {
       $role =  Role::find($id);
       $role->delete();

         $notification = array(
            'message' => '¡Datos eliminados!',
            'alert-type' => 'success');

            return \Redirect::back()->with($notification);


    }
}

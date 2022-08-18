<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsuarioController extends Controller
{
    
     public function __construct()
    {
        $this->middleware('permission:VerUsuario')->only('index'); 
        $this->middleware('permission:RegistrarUsuario')->only('create');
        $this->middleware('permission:RegistrarUsuario')->only('store');
        $this->middleware('permission:EditarUsuario')->only('edit');
        $this->middleware('permission:EditarUsuario')->only('update');
        $this->middleware('permission:VerUsuario')->only('show'); 

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('roles')->with('permissions')
                       ->orderBy('created_at', 'desc')
                       ->get();

        return view('admin.usuarios.index', ['users' => $users]);

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

         $user =new User();

         $user->name = $request->name;
         $user->lastname = $request->lastname;
         $user->email = $request->email;
         $user->username = $request->username;
         $user->password = $request->password;
         $user->status = $request->status;
         $user->genero = $request->genero;
         $user->name = $request->name;

         if ($request->genero == 1 ) {
             $user->foto = 'user-male.png';
         }
         else
         {
            $user->foto = 'user-female.png';
         }



        if ($request->has('role'))
        {
            $user->assignRole($request->role);
        }

        $user->save();


        return redirect()->back();
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
        //dd($request);

         $user = User::find(($id));
         $user->lastname = $request->lastname;
         $user->email = $request->email;
         $user->username = $request->username;
         $user->password = $request->password;
         $user->status = $request->status;
         $user->genero = $request->genero;
         $user->name = $request->name;

         if ($request->genero == 1 ) {
             $user->foto = 'user-male.png';
         }
         else
         {
            $user->foto = 'user-female.png';
         }


          if ($request->has('role'))
        {
            $user->syncRoles($request->role);
        }

        $user->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

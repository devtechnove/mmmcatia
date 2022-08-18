<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:VerLogins')->only('index'); 
        $this->middleware('permission:RegistrarLogins')->only('create');
        $this->middleware('permission:RegistrarLogins')->only('store');
        $this->middleware('permission:EditarLogins')->only('edit');
        $this->middleware('permission:EditarLogins')->only('update');
        $this->middleware('permission:VerLogins')->only('show'); 

    }


    public function index(Request $request)
    {
        $logins = Login::orderBy('login_at', 'asc')->get();

        return view('admin.login.index', ['logins' => $logins]);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function FormLogin(){
        return view('login.formlogin');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }

    public function welcome(Request $request){
        $nama = $request->first_name;
        $nama1 = $request->last_name;
        return view('welcomee', compact('nama', 'nama1'));
    }
}

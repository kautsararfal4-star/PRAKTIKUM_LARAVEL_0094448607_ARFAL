<?php

namespace App\Http\Controllers;

use Illuminate\Auth;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Symfony\Component\Routing\Annotation\Route;
use Illuminate\Database\Events\ModelsPruned;

class petugasController extends Controller
{
    public function login(){
        return view('/login');
    }

    public function proseslogin(Request $request){
        
          $ambildata=-$request->only('email','password');

        if (auth::attempt($ambildata)){
            $request->validate([
                'email'=>'required',
                'password'=>'required'
            ]);
        }
    }
}
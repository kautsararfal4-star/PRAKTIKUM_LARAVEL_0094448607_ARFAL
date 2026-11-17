<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Symfony\Component\Routing\Annotation\Route;
use Illuminate\Database\Events\ModelsPruned;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\password;

class petugasController extends Controller
{
    public function login(){
        return view('/login');
    }

    public function proseslogin(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        
         $ambildata=$request->only('email','password');

         if (Auth::attempt($ambildata)){
            $request=redirect()->interted('/dashboard');
         }else{
            return back()->with('error', 'Email atau password salah');
         }
        
        }
    }

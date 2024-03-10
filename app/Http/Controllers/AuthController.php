<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function loginPage(){
        return view('loginPage');
    }

     public function registerPage(){
        return view('registerPage');
    }

    public function UserFilter(){
         if(Auth::user()->role == 'admin'){
            return redirect()->route('admin#dashBoard');
        }else if(Auth::user()->role == 'doctor'){
            return redirect()->route('doctor#home');
        }else if(Auth::user()->role == 'patient'){
            return redirect()->route('patient#home');
        }
    }
}

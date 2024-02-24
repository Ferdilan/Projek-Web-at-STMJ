<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function halamanlogin(){
        return view('login.login');
    }

    public function postlogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/tagihan');
        }    
        return redirect('/login')->with('warning', 'Login Gagal <br> Pastikan Katasandi / <br> Email Yang benar!');
    }

    public function logout(){
        Auth::logout();
        return redirect ('/');
    }
}


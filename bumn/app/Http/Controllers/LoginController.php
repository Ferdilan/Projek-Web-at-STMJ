<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Support\Str;
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
        return redirect ('/login');
    }

    public function registrasi(){
        return view('login.registrasi');
    }

    public function simpanregistrasi(Request $request){
        // dd($request->all());

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'level' => 'pelanggan',
            'remember_token' => Str::random(60),
        ]);

        return view('login.login');

    }
}


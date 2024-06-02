<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function login_proses(Request $request){
        $request->validate([
            'email'=> 'required',
            'password'=> 'required'
        ]);

        $data = [
            'email'     => $request->email,
            'password'  => $request->password
        ];

        if(Auth::attempt($data)){
            return view('laman-masuk');
        }else {
            return redirect()->route("login")->with('Failed','Email atau Password Salah');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('succes','kamu berhasil logout');
    }
}

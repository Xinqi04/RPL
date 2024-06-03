<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

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
        return redirect()->route('laman-utama')->with('Success','kamu berhasil logout');
    }

    public function register(){
        return view('register');
    }

    public function register_proses(Request $request){
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'email'=> 'required|email',
            'password'=> 'required',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data['name']       = $request->username ;
        $data['email']      = $request->email ;
        $data['password']   = Hash::make($request->password);

        
        user::create($data);

        return view('laman-utama');

        // $data = [
        //     'email'     => $request->email,
        //     'password'  => $request->password
        // ];


        // if(Auth::attempt($data)){
        //     return view('laman-masuk');
        // }else {
        //     return redirect()->route("login")->with('Failed','Email atau Password Salah');
        // }

        
        
    }
}

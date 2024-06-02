<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
{
    public function laman_utama(){
        return view('laman-utama');
    }
    public function index() {
        $dataUser = User::get();
        return view('index',compact('dataUser'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'email'=> 'required|email',
            'password'=> 'required',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data['name'] = $request->nama;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);

        User::create($data);

        return redirect()->route('index');
    }

    public function edit(Request $request, $id){
        $user = User::find($id);

        return view('edit',compact('user'));
    }

    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'email'=> 'required|email',
            'password'=> 'nullable',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data['name'] = $request->nama;
        $data['email'] = $request->email;

        if($request->password){
            $data['password'] = Hash::make($request->password);
        }

        User::where('id',$id)->update($data);

        return redirect()->route('index');

    }

    public function delete(Request $request, $id){
        $user = User::find($id);

        if($user){
            $user->delete();
        }

        return redirect('index');
    }

}

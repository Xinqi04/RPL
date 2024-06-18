<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Laboratorium;
use App\Models\Pasien;
use App\Models\Radiologi;
use App\Models\RawatJalan;
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
        $jumlahDokter = Dokter::count();
        $jumlahPasien = Pasien::count();
        $jumlahUser   = User::count();
        $jumlahRawatJalan = RawatJalan::count();
        $jumlahRadiologi = Radiologi::count();
        $jumlahLaboratorium = Laboratorium::count();

        
        return view('admin', compact('jumlahDokter', 'jumlahPasien', 'jumlahUser', 'jumlahRawatJalan', 'jumlahRadiologi','jumlahLaboratorium'));
    }

    public function admin_data_user() {
        $dataUser = User::get();
        return view('index',compact('dataUser'));
    }

    public function admin_data_pasien() {
        $dataPasien = Pasien::get();
        return view('admin-pasien',compact('dataPasien'));
    }

    public function admin_data_dokter() {
        $dataDokter = Dokter::with('spesialis')->get();
        return view('admin-dokter',compact('dataDokter'));
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

    public function detail(Request $request, $id){
        $user = User::find($id);

        return view('detail',compact('user'));
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

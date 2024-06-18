<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Pasien;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PasienController extends Controller
{

    public function registrasi_pasien()
    {
        return view('registrasi-pasien');
    }
    public function registrasi_pasien_berhasil(){
        return view('laman-masuk'); 
    }
    
    public function registrasi_pasien_proses(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_pasien' => 'required',
            'tanggal_lahir' => 'required',
            'no_hp' => 'required',
            'photo' => 'required|mimes:png,jpg,jpeg[max:2048]',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $photo = $request->file('photo');
        $filename = date('Y-m-d') . $photo->getClientOriginalName();
        $path = 'photo-ktp-pasien/' . $filename;

        Storage::disk('public')->put($path, file_get_contents($photo));

        $data['nama'] = $request->nama_pasien;
        $data['tanggal_lahir'] = $request->tanggal_lahir;
        $data['no_hp'] = $request->no_hp;
        $data['image'] = $filename;


        // Tambahkan user_id dari pengguna yang sedang login
        $data['user_id'] = Auth::id();

        // Simpan data ke database
        pasien::create($data);
        
        return redirect()->route('registrasi-pasien-berhasil')->with('pasien_success', 'Data pasien berhasil didaftarkan!');
    }

}
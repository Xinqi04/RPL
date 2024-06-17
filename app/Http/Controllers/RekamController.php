<?php

namespace App\Http\Controllers;
use App\Models\Pasien;
use App\Models\RekamMedis;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\RawatJalan;
use Illuminate\Http\Request;

class RekamController extends Controller
{
    public function index () 
    {
        $user = Auth::user();
        return view('rekam-medis', compact('user'));
    }

    public function show(Request $request, $id) 
    {
        $pasien = Pasien::find($id);
        $rekamMedis = RekamMedis::where('pasiens_id', $id)->get(); // Mengambil semua riwayat medis pasien
        return view('lihat-rekam-medis', compact('pasien', 'rekamMedis'));
    }


    // public function detail(Request $request, $id){
    //     $user = User::find($id);

    //     return view('detail',compact('user'));
    // }
}
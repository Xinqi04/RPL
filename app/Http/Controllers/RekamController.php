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
        $pasien = Pasien::with(['rekamMedis.rawatJalan.jadwalDokter.dokter.spesialis'])->find($id);
        return view('lihat-rekam-medis', compact('pasien'));
    }
}
<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\JadwalDokter;
use Illuminate\Http\Request;
use App\Models\Dokter;

class JadwalController extends Controller
{
    public function index () 
    {
        
        // $jadwal = JadwalDokter::all();
        $dokters = Dokter::all();
        $spesialis = $dokters->unique('spesialis');
        return view('jadwal-dokter', [
            'dokters' => $dokters,
            'spesialis' => $spesialis
            // compact('jadwal')
            ]);
    }
    public function show (Dokter $dokter)
    {
        
        return view('dokters', [
            'dokter' => $dokter
        ]);
    }

    public function jadwal_dokter_proses (Request $request){
        return view('jadwal-dokter');
    }
}

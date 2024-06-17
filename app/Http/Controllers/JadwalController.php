<?php

namespace App\Http\Controllers;
use App\Models\Dokter;
use App\Http\Controllers\Controller;
use App\Models\JadwalDokter;
use App\Models\Spesialis;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index () 
    {
        $spesialis = Spesialis::get();
        $dokters = Dokter::all();
        return view('jadwal-dokter', compact('spesialis','dokters'));
    }

    public function lihat_jadwal_spesialis (Request $request, $id) {
        // $data = Spesialis::with('dokters')->find($id);
        $data = Spesialis::with(['dokters.jadwal'])->find($id);
        return view('jadwal-dokter-spesialis', compact('data'));
    }

    public function lihat_jadwal_dokter (Request $request, $id) {
        // $dokter = JadwalDokter::find($id);
        $dokter = Dokter::with('spesialis', 'jadwal')->find($id);
        return view('lihat-jadwal-dokter', compact('dokter'));
    }


}
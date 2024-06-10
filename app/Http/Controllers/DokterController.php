<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\JadwalDokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function getDokterBySpesialis(Request $request)
    {
        $spesialis = $request->query('spesialis');
        $dokter = Dokter::where('spesialis', $spesialis)->get();
        return response()->json($dokter);
    }

    public function getJadwalByDokter(Request $request)
    {
        $dokterId = $request->query('dokter_id');
        $jadwal = JadwalDokter::where('dokter_id', $dokterId)->get();
        return response()->json($jadwal);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\JadwalDokter;
use Illuminate\Http\Request;
use App\Models\Dokter;

class DokterController extends Controller
{
    public function showJadwalForm()
    {
        $spesialisList = ['Cardiologist', 'Dermatologist', 'Neurologist', 'Orthopedic', 'Pediatrician', 'Psychiatrist'];
        return view('jadwal-dokter', compact('spesialisList'));
    }

    public function showJadwal(Request $request)
    {
        $spesialis = $request->input('spesialis');
        $dokterId = $request->input('dokter');

        $dokter = Dokter::with('jadwal')->findOrFail($dokterId);

        return view('dokter-jadwal-result', compact('dokter'));
    }
    public function index()
    {
        dd(Dokter::get());
        return view('jadwal-dokter', [
            
        ]);
    }
}

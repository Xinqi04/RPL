<?php

namespace App\Http\Controllers;
use App\Models\Pasien;
use App\Models\RekamMedis;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\RawatJalan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

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
        $rekamMedis = RekamMedis::with('pasien')->find($id);

        if ($request->get('export') == 'pdf') {
            $pdf = Pdf::loadView('pdf.rekamMedis', ['pasien' => $pasien, 'rekamMedis' => $rekamMedis]);
            return $pdf->stream('Rekam Medis.pdf');
        }

        return view('lihat-rekam-medis', compact('pasien'));
    }

    public function download(Request $request, $id) 
    {
        $rekamMedis = RekamMedis::with('pasien')->find($id);

        if (!$rekamMedis) {
            abort(404); // Tampilkan halaman 404 jika rekam medis tidak ditemukan
        }

        $idPasien = $rekamMedis->pasiens_id;

        $pasien = Pasien::where('id', $idPasien)
                        ->with(['rekamMedis.rawatJalan.jadwalDokter.dokter.spesialis'])
                        ->first();

        if (!$pasien) {
            abort(404); // Tampilkan halaman 404 jika pasien tidak ditemukan
        }

        $namaPasien = $pasien->nama;

        if ($request->get('export') == 'pdf') {
            $pdf = Pdf::loadView('pdf.rekamMedis', ['pasien' => $pasien, 'namaPasien' => $namaPasien]);
            return $pdf->download('Rekam Medis.pdf');
        }
    }


}
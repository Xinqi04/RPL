<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Laboratorium;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class LaboratoriumController extends Controller
{
    public function index () 
    {
        $user = Auth::user();
        $kategori = ['Hematology','Kimia Darah', 'Imunoserologi', 'Urinalisasi'];
        return view('registrasi-labo', compact('user','kategori'));
    }

    function translateDayToIndonesian($day)
    {
       $days = [
           'Monday' => 'Senin',
           'Tuesday' => 'Selasa',
           'Wednesday' => 'Rabu',
           'Thursday' => 'Kamis',
           'Friday' => 'Jumat',
           'Saturday' => 'Sabtu',
           'Sunday' => 'Minggu',
        ];
        return $days[$day];
    }

    public function registrasi_labo_proses(Request $request)
    {
        // Validasi input
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'nama_pasien' => 'required',
            'spesialis' => 'required',
            'tanggal_diperiksa' => 'required|date',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Ambil spesialis dan tanggal dari request
        $spesialis = $request->input('spesialis');
        $tanggal_diperiksa = $request->input('tanggal_diperiksa');

        // Menentukan hari dari tanggal yang dipilih
        $hari = Carbon::parse($tanggal_diperiksa)->format('l'); // Format 'l' akan memberikan nama hari dalam bahasa Inggris
        $hari = $this->translateDayToIndonesian($hari);

        $janji['pasiens_id'] = $request->nama_pasien;
        $janji['kategori'] = $spesialis;
        $janji['tanggal_pemeriksaan'] = $tanggal_diperiksa;
        Laboratorium::create($janji);

        // return redirect()->route('laman-masuk')->with('success', 'Janji temu berhasil dibuat.');
        return view('laman-masuk');
    }
}
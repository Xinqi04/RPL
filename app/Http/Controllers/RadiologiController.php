<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Radiologi;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class RadiologiController extends Controller
{
    public function index () 
    {
        $user = Auth::user();
        $kategori = ['Rontgen','USG', 'HSG'];
        return view('registrasi-radio', compact('user', 'kategori'));
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

    public function registrasi_radio_berhasil()
    {
        return view('laman-masuk');
    }

    public function registrasi_radio_proses(Request $request)
    {
        // Validasi input
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'id_pasien' => 'required',
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
        Radiologi::create($janji);

        // return redirect()->route('laman-masuk')->with('success', 'Janji temu berhasil dibuat.');
        return redirect()->route('registrasi-radio-berhasil')->with('radio_success', 'Pendaftaran Radiologi Sukses! Pasien ' . $request->nama_pasien . ' telah berhasil didaftarkan untuk pemeriksaan ' . $request->spesialis . ' pada tanggal ' . $request->tanggal_diperiksa . '. Nomor antrian Anda akan segera diinformasikan.');
    }
}
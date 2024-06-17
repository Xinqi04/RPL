<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Spesialis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\RawatJalan;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class JanjiRsController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $spesialis = Spesialis::get();
        return view('registrasi-janji-rs', compact('user', 'spesialis'));
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

    public function registrasi_janji_rs_proses(Request $request)
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
        
          // Menentukan hari dari tanggal yang dipilih dalam bahasa Indonesia
            // $days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            // $hariIndex = Carbon::parse($tanggal_diperiksa)->dayOfWeek;
            // $hari = $days[$hariIndex];


        // Menentukan hari dari tanggal yang dipilih
        $hari = Carbon::parse($tanggal_diperiksa)->format('l'); // Format 'l' akan memberikan nama hari dalam bahasa Inggris
        $hari = $this->translateDayToIndonesian($hari);

        // Cari jadwal dokter yang sesuai dengan spesialis dan hari
        $jadwalDokter = DB::table('dokters')
        ->join('jadwal_dokters', 'dokters.id', '=', 'jadwal_dokters.dokter_id')
        ->where('dokters.spesialis_id', $request->spesialis)
        ->where('jadwal_dokters.hari', $hari)
        ->select('jadwal_dokters.*')
        ->first();

        if (!$jadwalDokter) {
            return redirect()
                ->back()
                ->withErrors(['Tidak ada jadwal dokter yang tersedia pada hari tersebut untuk spesialis yang dipilih.'])
                ->withInput();
        }

        // Buat janji temu 
        // $janji = [];
        $janji['pasiens_id'] = $request->nama_pasien;
        $janji['spesialis_id'] = $spesialis;
        $janji['tanggal_pemeriksaan'] = $tanggal_diperiksa;
        $janji['jadwal_dokters_id'] = $jadwalDokter->id; // Menyimpan ID jadwal dokter
        RawatJalan::create($janji);

        // return redirect()->route('laman-masuk')->with('success', 'Janji temu berhasil dibuat.');
        return view('laman-masuk');
    }

    // public function registrasi_pasien_proses(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'nama_pasien' => 'required',
    //         'tanggal_lahir' => 'required',
    //         'no_hp' => 'required',
    //         'photo' => 'required|mimes:png,jpg,jpeg[max:2048]',
    //     ]);

    //     if ($validator->fails()) {
    //         return redirect()->back()->withErrors($validator)->withInput();
    //     }

    //     $photo = $request->file('photo');
    //     $filename = date('Y-m-d') . $photo->getClientOriginalName();
    //     $path = 'photo-ktp-pasien/' . $filename;

    //     Storage::disk('public')->put($path, file_get_contents($photo));

    //     $data['nama'] = $request->nama_pasien;
    //     $data['tanggal_lahir'] = $request->tanggal_lahir;
    //     $data['no_hp'] = $request->no_hp;
    //     $data['image'] = $filename;

    //     // Tambahkan user_id dari pengguna yang sedang login
    //     $data['user_id'] = Auth::id();

    //     // Simpan data ke database
    //     pasien::create($data);

    //     return view('laman-masuk');
    // }
}

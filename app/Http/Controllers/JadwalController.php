<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\JadwalDokter;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index () 
    {
        $jadwal = JadwalDokter::all();
        return view('jadwal-dokter', compact('jadwal'));
    }

    public function jadwal_dokter_proses (Request $request){
        
    }
}

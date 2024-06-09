<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Models\JadwalDokter;
=======
>>>>>>> 9d20d89bdc95504b9c62bedb0c6d91e2af7c5b5a
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index () 
    {
<<<<<<< HEAD
        $jadwal = JadwalDokter::all();
        return view('jadwal-dokter', compact('jadwal'));
    }

    public function jadwal_dokter_proses (Request $request){
        
=======
        return view('jadwal-dokter');
>>>>>>> 9d20d89bdc95504b9c62bedb0c6d91e2af7c5b5a
    }
}

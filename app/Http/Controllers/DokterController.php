<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;

class DokterController extends Controller
{
    public function index()
    {
        dd(Dokter::get());
        return view('jadwal-dokter', [
            
        ]);
    }
}

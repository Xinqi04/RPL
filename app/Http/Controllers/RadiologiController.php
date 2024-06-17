<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RadiologiController extends Controller
{
    public function index () 
    {
        $user = Auth::user();
        // $kategori = ['Rontgen','USG', 'HSG'];
        return view('registrasi-radio', compact('user'));
    }
}
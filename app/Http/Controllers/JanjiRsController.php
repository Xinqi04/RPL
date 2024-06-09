<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JanjiRsController extends Controller
{
    public function index () 
    {
        return view('registrasi-janji-rs');
    }
}
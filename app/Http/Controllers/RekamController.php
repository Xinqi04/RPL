<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RekamController extends Controller
{
    public function index () 
    {
        return view('rekam-medis');
    }
}
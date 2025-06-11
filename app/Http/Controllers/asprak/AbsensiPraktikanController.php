<?php

namespace App\Http\Controllers\asprak;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AbsensiPraktikanController extends Controller
{
    public function index()
    {
        return view('asprak.AbsensiPraktikan'); 
    }
}
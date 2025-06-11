<?php

namespace App\Http\Controllers\asprak;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardAsprakController extends Controller
{
    public function index()
    {
        return view('asprak.DashboardAsprak'); // ✅ path view baru
    }
}
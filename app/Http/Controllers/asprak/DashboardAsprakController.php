<?php

namespace App\Http\Controllers\asprak;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardAsprakController extends Controller
{
    public function DashboardAsprak()
    {
        return view('asprak.DashboardAsprak'); 
    }
}
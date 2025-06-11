<?php

namespace App\Http\Controllers\asprak;
use App\Models\KelasPraktikum;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KelasPraktikumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('asprak.KelasPraktikumAsprak'); // 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Logika penyimpanan data bisa ditambahkan di sini
    }

    /**
     * Display the specified resource.
     */
    public function show(KelasPraktikum $kelasPraktikum)
    {
        // Bisa return view detail jika kamu buat file detail kelas praktikum
        // Contoh:
        // return view('asprak.DetailKelasPraktikum', compact('kelasPraktikum'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KelasPraktikum $kelasPraktikum)
    {
        // Logika update data bisa ditambahkan di sini
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KelasPraktikum $kelasPraktikum)
    {
        // Logika penghapusan data bisa ditambahkan di sini
    }
}

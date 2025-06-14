<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function DashboardDosen()
    {
        return view('dosen.DashboardDosen');
    }

    public function BeritaAcaraDosen()
    {
        return view('dosen.BeritaAcaraDosen');
    }

    public function InformasiNilaiDosen()
    {
        $matkuls = [
            'Jaringan Komputer Dasar - B',
            'Basis Data - C',
            'Pemrograman Web - A',
        ];
        return view('dosen.InformasiNilaiDosen', compact('matkuls'));
    }

    public function FileNilaiDosen($matkul)
    {
        $pertemuans = [
            [
                'judul' => 'Pertemuan 1',
                'tanggal' => '24 April 2026',
                'deskripsi' => 'Materi tentang bumi itu datar',
                'file' => '#'
            ],
        ];
        return view('dosen.FileNilaiDosen', [
            'matkul' => $matkul,
            'pertemuans' => $pertemuans
        ]);
    }
}

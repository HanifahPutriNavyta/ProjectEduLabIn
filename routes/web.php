<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\asprak\DashboardAsprakController;
use App\Http\Controllers\asprak\AbsensiPraktikanController;
use App\Http\Controllers\asprak\KelasPraktikumController;
use App\Http\Controllers\AuthController;

// ======== ROUTE UNTUK GUEST (BELUM LOGIN) ========= //

// Form Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Proses Login
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// Form Daftar
Route::get('/daftar', [AuthController::class, 'showRegisterForm'])->name('daftar');
// Proses Daftar
Route::post('/daftar', [AuthController::class, 'register'])->name('daftar.submit');

// ======== ROUTE SETELAH LOGIN ========= //

// Halaman Kelas Praktikum Asprak (redirect setelah login jika role asprak)
Route::get('/KelasPraktikumAsprak', function () {
    return view('asprak.KelasPraktikumAsprak');
})->name('KelasPraktikumAsprak');

// Halaman Dashboard Asprak
Route::get('/DashboardAsprak', [DashboardAsprakController::class, 'index'])->name('DashboardAsprak');

// Halaman Absensi Praktikan
Route::get('/AbsensiPraktikan', [AbsensiPraktikanController::class, 'index'])->name('AbsensiPraktikan');

// Halaman Kelas Praktikum lewat Controller
Route::get('/KelasPraktikum', [KelasPraktikumController::class, 'index'])->name('KelasPraktikum');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
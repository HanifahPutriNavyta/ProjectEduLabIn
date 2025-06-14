<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\asprak\DashboardAsprakController;
use App\Http\Controllers\asprak\AbsensiPraktikanController;
use App\Http\Controllers\asprak\KelasPraktikumController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DosenController;


// =========================
// ROUTE LOGIN & DAFTAR
// =========================
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/daftar', [AuthController::class, 'showRegisterForm'])->name('daftar');
Route::post('/daftar', [AuthController::class, 'daftar'])->name('daftar.submit');

// =========================
// NAVBAR & SIDEBAR
// =========================
Route::get('/navbar', function () {
    return view('partials.navbar');
});

Route::get('/sidebar', function () {
    return view('sidebar');
});

// =========================
// ROUTE ASPRAK HALAMAN UTAMA / MENU UTAMA
// =========================
Route::get('/DashboardAsprak', [DashboardAsprakController::class, 'DashboardAsprak'])->name('DashboardAsprak');
Route::get('/KelasPraktikumAsprak', [KelasPraktikumController::class, 'KelasPraktikumAsprak'])->name('KelasPraktikumAsprak');
Route::get('/AbsensiPraktikan', [AbsensiPraktikanController::class, 'AbsensiPraktikan'])->name('AbsensiPraktikan');


// =========================
// ROUTE DOSEN HALAMAN UTAMA / MENU UTAMA
// =========================
// Admin routes
Route::prefix('dosen')->name('dosen.')->group(function () {
    Route::get('/DashboardDosen', [DosenController::class, 'DashboardDosen'])->name('DashboardDosen');
    Route::get('/BeritaAcaraDosen', [DosenController::class, 'BeritaAcaraDosen'])->name('BeritaAcaraDosen');
    Route::get('/InformasiNilaiDosen', [DosenController::class, 'InformasiNilaiDosen'])->name('InformasiNilaiDosen');
    Route::get('/FileNilaiDosen/{matkul}', [DosenController::class, 'FileNilaiDosen'])->name('FileNilaiDosen');
});

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
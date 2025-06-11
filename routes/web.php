<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\asprak\DashboardAsprakController;
use App\Http\Controllers\asprak\AbsensiPraktikanController;
use App\Http\Controllers\asprak\KelasPraktikumController;
use App\Http\Controllers\AuthController;

// =========================
// ROUTE LOGIN & DAFTAR
// =========================

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/daftar', [AuthController::class, 'showRegisterForm'])->name('daftar');
Route::post('/daftar', [AuthController::class, 'daftar'])->name('daftar.submit');

// =========================
// ROUTE HALAMAN UTAMA / MENU UTAMA
// =========================

Route::get('/KelasPraktikumAsprak', [KelasPraktikumController::class, 'KelasPraktikumAsprak'])->name('KelasPraktikumAsprak');
Route::get('/DashboardAsprak', [DashboardAsprakController::class, 'index'])->name('DashboardAsprak');
Route::get('/AbsensiPraktikan', [AbsensiPraktikanController::class, 'index'])->name('AbsensiPraktikan');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
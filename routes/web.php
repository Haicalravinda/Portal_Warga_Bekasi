<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

// ============================
// 🏠 Halaman Utama (Warga)
// ============================
Route::get('/', [HomeController::class, 'index'])->name('home');

// 📢 Pengaduan & Berita tanpa login
Route::resource('complaints', ComplaintController::class)->only(['index', 'create', 'store', 'show']);
Route::resource('news', NewsController::class)->only(['index', 'show']);



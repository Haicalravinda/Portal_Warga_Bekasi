<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Menampilkan halaman utama warga
    public function index()
    {
        // Ambil 5 berita terbaru
        $news = News::latest()->take(5)->get();

        // Tentukan jadwal kerja bakti (misalnya tanggal tetap setiap bulan)
        $workSchedule = "Setiap hari Sabtu, pukul 08:00 - 10:00 WIB";

        // Pass data ke view
        return view('home', compact('news', 'workSchedule'));
    }
}


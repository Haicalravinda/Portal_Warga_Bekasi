<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    // Menampilkan daftar berita
    public function index()
    {
        $news = News::all();  // Mengambil semua berita dari database
        return view('news.index', compact('news'));
    }

    // Menampilkan detail berita
    public function show($id)
    {
        $news = News::findOrFail($id);
        return view('news.show', compact('news'));
    }
}

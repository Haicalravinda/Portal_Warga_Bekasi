<?php
namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    // Menampilkan daftar pengaduan
    public function index()
    {
        $complaints = Complaint::all();  // Menampilkan semua pengaduan
        return view('complaints.index', compact('complaints'));
    }

    // Menampilkan halaman untuk membuat pengaduan baru
    public function create()
    {
        return view('complaints.create');
    }

    // Menyimpan pengaduan baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',  // Validasi gambar
            'location' => 'required|string',
        ]);

        // Menyimpan pengaduan baru ke database
        $complaint = new Complaint();
        $complaint->title = $request->title;
        $complaint->description = $request->description;
        $complaint->location = $request->location;

        // Meng-upload gambar bukti jika ada
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/complaints', 'public');
            $complaint->image = $imagePath;
        }

        $complaint->save();

        return redirect()->route('complaints.index')->with('success', 'Pengaduan berhasil dikirim.');
    }
}

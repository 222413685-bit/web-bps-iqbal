<?php

namespace App\Http\Controllers;

use App\Models\Publikasi;
use Illuminate\Http\Request;

class PublikasiController extends Controller
{
    public function home()
    {
    $totalPublikasi = Publikasi::count();

    $publikasi2026 = Publikasi::whereYear('tanggal_rilis', 2026)->count();

    $publikasi2025 = Publikasi::whereYear('tanggal_rilis', 2025)->count();

    return view('home', compact(
        'totalPublikasi',
        'publikasi2026',
        'publikasi2025'
    ));
    }
    
    public function index()
    {
        $publikasi = Publikasi::all();

        return view('publikasi.index', compact('publikasi'));
    }

    public function create()
    {
        return view('publikasi.create');
    }

    public function store(Request $request)
{
    // Validasi data
    $request->validate([
        'judul' => 'required|string|max:255',
        'tanggal_rilis' => 'required|date|after_or_equal:today',
        'sampul' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
    ], [
        'judul.required' => 'Judul publikasi wajib diisi.',

        'tanggal_rilis.required' => 'Tanggal rilis wajib diisi.',
        'tanggal_rilis.date' => 'Format tanggal tidak valid.',
        'tanggal_rilis.after_or_equal' => 'Tanggal rilis tidak boleh sebelum hari ini.',

        'sampul.required' => 'Sampul publikasi wajib diupload.',
        'sampul.image' => 'File sampul harus berupa gambar.',
        'sampul.mimes' => 'Format sampul harus JPG, JPEG, PNG, atau WEBP.',
        'sampul.max' => 'Ukuran sampul maksimal 2 MB.',
    ]);

    // Membuat objek publikasi
    $publikasi = new Publikasi();

    $publikasi->judul = $request->judul;
    $publikasi->tanggal_rilis = $request->tanggal_rilis;


    // Upload gambar
    if ($request->hasFile('sampul')) {

        $file = $request->file('sampul');

        $namaFile = time() . '_' . $file->getClientOriginalName();

        $file->move(public_path('images'), $namaFile);

        $publikasi->sampul = $namaFile;
    }


    // Simpan ke database
    $publikasi->save();

    return redirect('/publikasi');
}

    public function edit($id)
    {
        $publikasi = Publikasi::findOrFail($id);

        return view('publikasi.edit', compact('publikasi'));
    }

    public function update(Request $request, $id)
{
    $publikasi = Publikasi::findOrFail($id);

    $request->validate([
        'judul' => 'required|string|max:255',
        'tanggal_rilis' => 'required|date',
        'sampul' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ], [
        'judul.required' => 'Judul publikasi wajib diisi.',
        'judul.string' => 'Judul publikasi harus berupa teks.',
        'judul.max' => 'Judul publikasi maksimal 255 karakter.',

        'tanggal_rilis.required' => 'Tanggal rilis wajib diisi.',
        'tanggal_rilis.date' => 'Format tanggal tidak valid.',

        'sampul.image' => 'File sampul harus berupa gambar.',
        'sampul.mimes' => 'Format sampul harus JPG, JPEG, PNG, atau WEBP.',
        'sampul.max' => 'Ukuran sampul maksimal 2 MB.',
    ]);

    $publikasi->judul = $request->judul;
    $publikasi->tanggal_rilis = $request->tanggal_rilis;

    // Jika ada sampul baru
    if ($request->hasFile('sampul')) {
        $file = $request->file('sampul');

        $namaFile = time() . '_' . $file->getClientOriginalName();

        $file->move(public_path('images'), $namaFile);

        $publikasi->sampul = $namaFile;
    }

    $publikasi->save();

    return redirect('/publikasi');
}

    public function destroy($id)
    {
        $publikasi = Publikasi::findOrFail($id);

        $publikasi->delete();

        return redirect('/publikasi');
    }
    
}
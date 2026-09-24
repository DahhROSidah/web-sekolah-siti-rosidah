<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    /**
     * Tampilkan semua data berita.
     */
    public function index()
    {
        $beritas = Berita::latest()->get();

        return view('berita', compact('beritas'));
    }

    /**
     * Tampilkan form tambah berita.
     */
    public function create()
    {
        return view('berita.create');
    }

    /**
     * Simpan data berita baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul'      => 'required|string|max:255',
            'isi_berita' => 'required|string',
            'gambar'     => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only(['judul', 'isi_berita']);
        $data['slug'] = Str::slug($request->judul) . '-' . time();

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('berita', 'public');
        }

        Berita::create($data);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    /**
     * Tampilkan detail satu berita (berdasarkan slug).
     */
    public function show(Berita $berita)
    {
        return view('berita.show', compact('berita'));
    }

    /**
     * Tampilkan form edit berita.
     */
    public function edit(Berita $berita)
    {
        return view('berita.edit', compact('berita'));
    }

    /**
     * Update data berita.
     */
    public function update(Request $request, Berita $berita)
    {
        $request->validate([
            'judul'      => 'required|string|max:255',
            'isi_berita' => 'required|string',
            'gambar'     => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only(['judul', 'isi_berita']);

        // Update slug hanya jika judul berubah
        if ($berita->judul !== $request->judul) {
            $data['slug'] = Str::slug($request->judul) . '-' . time();
        }

        if ($request->hasFile('gambar')) {
            if ($berita->gambar && Storage::disk('public')->exists($berita->gambar)) {
                Storage::disk('public')->delete($berita->gambar);
            }

            $data['gambar'] = $request->file('gambar')->store('berita', 'public');
        }

        $berita->update($data);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui.');
    }

    /**
     * Hapus data berita.
     */
    public function destroy(Berita $berita)
    {
        if ($berita->gambar && Storage::disk('public')->exists($berita->gambar)) {
            Storage::disk('public')->delete($berita->gambar);
        }

        $berita->delete();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus.');
    }
}
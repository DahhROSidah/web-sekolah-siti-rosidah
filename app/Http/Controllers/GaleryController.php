<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleryController extends Controller
{
    // Menampilkan semua foto
    public function index()
    {
        $galeries = Galery::latest()->get();

        return view('galery', compact('galeries'));
    }

    // Halaman tambah foto
    public function create()
    {
        return view('admin.galery.create');
    }

    // Menyimpan foto
    public function store(Request $request)
    {
        $request->validate([
            'judul_foto' => 'required|string|max:255',
            'file_foto' => 'required|image|mimes:jpg,jpeg,png|max:5120',
        ], [
            'judul_foto.required' => 'Judul foto wajib diisi.',
            'file_foto.required' => 'Foto wajib dipilih.',
            'file_foto.image' => 'File harus berupa gambar.',
            'file_foto.mimes' => 'Foto harus JPG, JPEG, atau PNG.',
            'file_foto.max' => 'Ukuran foto maksimal 5 MB.',
        ]);

        $namaFile = $request->file('file_foto')
            ->store('galery', 'public');

        Galery::create([
            'judul_foto' => $request->judul_foto,
            'file_foto' => $namaFile,
        ]);

        return redirect()
            ->route('galery')
            ->with('success', 'Foto berhasil ditambahkan.');
    }

    // Halaman edit
    public function edit(Galery $galery)
    {
        return view('admin.galery.edit', compact('galery'));
    }

    // Update foto
    public function update(Request $request, Galery $galery)
    {
        $request->validate([
            'judul_foto' => 'required|string|max:255',
            'file_foto' => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
        ], [
            'judul_foto.required' => 'Judul foto wajib diisi.',
            'file_foto.image' => 'File harus berupa gambar.',
            'file_foto.mimes' => 'Foto harus JPG, JPEG, atau PNG.',
            'file_foto.max' => 'Ukuran foto maksimal 5 MB.',
        ]);

        $data = [
            'judul_foto' => $request->judul_foto,
        ];

        // Kalau upload foto baru
        if ($request->hasFile('file_foto')) {

            // Hapus foto lama
            if (
                $galery->file_foto &&
                Storage::disk('public')->exists($galery->file_foto)
            ) {
                Storage::disk('public')->delete($galery->file_foto);
            }

            // Simpan foto baru
            $data['file_foto'] = $request->file('file_foto')
                ->store('galery', 'public');
        }

        $galery->update($data);

        return redirect()
            ->route('galery')
            ->with('success', 'Foto berhasil diperbarui.');
    }

    // Hapus foto
    public function destroy(Galery $galery)
    {
        if (
            $galery->file_foto &&
            Storage::disk('public')->exists($galery->file_foto)
        ) {
            Storage::disk('public')->delete($galery->file_foto);
        }

        $galery->delete();

        return redirect()
            ->route('galery')
            ->with('success', 'Foto berhasil dihapus.');
    }
}
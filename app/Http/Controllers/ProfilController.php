<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    /**
     * Tampilkan profil sekolah (halaman publik / frontend).
     */
    public function index()
    {
        $profil = Profil::first();

        // Jika belum ada data di database, tampilkan default
        if (!$profil) {
            $profil = new Profil([
                'nama_sekolah' => 'SMKN 1 Cijati',
                'visi'         => '',
                'misi'         => '',
                'sejarah'      => '',
                'logo'         => null,
            ]);
        }

        return view('profil', compact('profil'));
    }

    /**
     * Tampilkan form edit profil (admin).
     */
    public function edit()
    {
        $profil = Profil::first();

        if (!$profil) {
            $profil = new Profil([
                'nama_sekolah' => 'SMKN 1 Cijati',
                'visi'         => '',
                'misi'         => '',
                'sejarah'      => '',
                'logo'         => null,
            ]);
        }

        return view('profil.edit', compact('profil'));
    }

    /**
     * Update data profil sekolah.
     */
    public function update(Request $request)
    {
        $request->validate([
            'nama_sekolah' => 'required|string|max:255',
            'visi'         => 'required|string',
            'misi'         => 'required|string',
            'sejarah'      => 'required|string',
            'logo'         => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $profil = Profil::first();

        if (!$profil) {
            $profil = new Profil();
        }

        $profil->nama_sekolah = $request->nama_sekolah;
        $profil->visi         = $request->visi;
        $profil->misi         = $request->misi;
        $profil->sejarah      = $request->sejarah;

        if ($request->hasFile('logo')) {
            if ($profil->logo && Storage::disk('public')->exists($profil->logo)) {
                Storage::disk('public')->delete($profil->logo);
            }

            $path = $request->file('logo')->store('profil', 'public');
            $profil->logo = $path;
        }

        $profil->save();

        return redirect()->back()->with('success', 'Profil sekolah berhasil diperbarui.');
    }
}
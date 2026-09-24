<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = Guru::all();

        return view('Guru', compact('gurus'));
    }

    public function create()
    {
        return view('admin.guru.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'jabatan' => 'required',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
            'deskripsi' => 'nullable',
        ]);

        $data = $request->all();

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')
                ->store('guru', 'public');
        }

        Guru::create($data);

        return redirect()
            ->route('guru')
            ->with('success', 'Data guru berhasil ditambahkan.');
    }
}
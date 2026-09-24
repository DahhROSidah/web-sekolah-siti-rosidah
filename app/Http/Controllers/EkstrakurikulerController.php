<?php

namespace App\Http\Controller;

use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;

class EkstrakurikulerController extends EkstrakurikulerController
{
    public function index()
    {
        $ekstrakurikulers = Ekstrakurikuler::latest()->get();

        return view('Ekstrakurikuler', compact('ekstrakurikuler'));
    }

    public function create()
    {
        return view('admin.ekstrakurikuler.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'nullable',
            'kategori' => 'nullable',
        ]);

        Ekstrakurikuler::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori,
        ]);

        return redirect()
            ->route('ekstrakurikuler')
            ->with('success', 'Ekstrakurikuler berhasil ditambahkan.');
    }
}
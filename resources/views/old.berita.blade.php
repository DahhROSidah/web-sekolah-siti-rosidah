 @extends('layouts.app')

@section('title', 'Data Berita')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Data Berita</h2>
        <a href="{{ route('galeri.create') }}" class="btn btn-primary">
    + Tambah Foto
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row g-3">
        @forelse ($beritas as $berita)
            <div class="col-md-4 col-sm-6">
                <div class="card h-100">
                    @if ($berita->gambar)
                        <img src="{{ asset('storage/' . $berita->gambar) }}"
                             class="card-img-top"
                             alt="{{ $berita->judul }}"
                             style="height: 180px; object-fit: cover;">
                    @else
                        <div class="d-flex align-items-center justify-content-center bg-light"
                             style="height: 180px;">
                            <span class="text-muted">Tidak ada gambar</span>
                        </div>
                    @endif

                    <div class="card-body">
                        <h6 class="card-title">{{ $berita->judul }}</h6>
                        <p class="card-text text-muted small">
                            {{ Str::limit(strip_tags($berita->isi_berita), 100) }}
                        </p>
                        <p class="card-text">
                            <small class="text-muted">
                                {{ $berita->created_at->translatedFormat('d F Y') }}
                            </small>
                        </p>
                    </div>

                    <div class="card-footer d-flex justify-content-between">
                        <a href="{{ route('berita.show', $berita->id) }}" class="btn btn-sm btn-info">
                            Detail
                        </a>
                        <a href="{{ route('berita.edit', $berita->id) }}" class="btn btn-sm btn-warning">
                            Edit
                        </a>
                        <form action="{{ route('berita.destroy', $berita->id) }}"
                              method="POST"
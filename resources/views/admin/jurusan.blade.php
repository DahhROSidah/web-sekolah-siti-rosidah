@extends('layouts.app')

@section('title', 'edit.blade.php')

@section('content')
<div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Detail Jurusan</h2>
        <a href="{{ route('jurusan') }}" class="btn btn-secondary btn-sm">
            &larr; Kembali
        </a>
    </div>

    <div class="card">
        @if ($jurusan->gambar)
            <img src="{{ asset('storage/' . $jurusan->gambar) }}"
                 class="card-img-top"
                 alt="{{ $jurusan->nama_jurusan }}"
                 style="max-height: 350px; object-fit: cover;">
        @else
            <div class="d-flex align-items-center justify-content-center bg-light" style="height: 250px;">
                <span class="text-muted">Tidak ada gambar</span>
            </div>
        @endif

        <div class="card-body">
            <span class="badge bg-info mb-2">{{ $jurusan->kode }}</span>
            <h3 class="card-title">{{ $jurusan->nama_jurusan }}</h3>
            <p class="card-text">{{ $jurusan->deskripsi }}</p>
        </div>
    </div>

</div>
@endsection
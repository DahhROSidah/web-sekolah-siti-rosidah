@extends('layouts.app')

@section('title', 'Tambah Jurusan')

@section('content')
<div class="container py-4">
    <h2 class="mb-3">Tambah Jurusan</h2>

    <form action="{{ route('jurusan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Kode Jurusan</label>
            <input type="text" name="kode" class="form-control" value="{{ old('kode') }}">
            @error('kode') <div class="text-danger small">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Jurusan</label>
            <input type="text" name="nama_jurusan" class="form-control" value="{{ old('nama_jurusan') }}">
            @error('nama_jurusan') <div class="text-danger small">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="4">{{ old('deskripsi') }}</textarea>
            @error('deskripsi') <div class="text-danger small">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Gambar</label>
            <input type="file" name="gambar" class="form-control">
            @error('gambar') <div class="text-danger small">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('jurusan') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
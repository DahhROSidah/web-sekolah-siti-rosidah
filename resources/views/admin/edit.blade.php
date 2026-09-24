@extends('layouts.app')

@section('title', 'Edit Jurusan')

@section('content')
<div class="container py-4">
    <h2 class="mb-3">edit.blade.php</h2>

    <form action="{{ route('jurusan.update', $jurusan->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Kode Jurusan</label>
            <input type="text" name="kode" class="form-control" value="{{ old('kode', $jurusan->kode) }}">
            @error('kode') <div class="text-danger small">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Jurusan</label>
            <input type="text" name="nama_jurusan" class="form-control" value="{{ old('nama_jurusan', $jurusan->nama_jurusan) }}">
            @error('nama_jurusan') <div class="text-danger small">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="4">{{ old('deskripsi', $jurusan->deskripsi) }}</textarea>
            @error('deskripsi') <div class="text-danger small">{{ $message }}</div> @enderror
        </div>

        @if ($jurusan->gambar)
            <div class="mb-3">
                <label class="form-label d-block">Gambar Saat Ini</label>
                <img src="{{ asset('storage/' . $jurusan->gambar) }}" style="max-height: 150px;">
            </div>
        @endif

        <div class="mb-3">
            <label class="form-label">Ganti Gambar (opsional)</label>
            <input type="file" name="gambar" class="form-control">
            @error('gambar') <div class="text-danger small">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('jurusan') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
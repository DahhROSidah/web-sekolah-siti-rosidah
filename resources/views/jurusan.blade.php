@extends('layouts.app')

@section('title', 'Data Jurusan')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Data Jurusan</h2>
        @if(session('admin_id'))
    <a href="{{ route('jurusan.create') }}" class="btn btn-primary">
        + Tambah Jurusan
    </a>
@endif
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row g-3">
        @forelse ($jurusans as $jurusan)
            <div class="col-md-3 col-sm-6">
                <div class="card h-100">
                    @if ($jurusan->gambar)
                        <img src="{{ asset('storage/' . $jurusan->gambar) }}"
                             class="card-img-top"
                             alt="{{ $jurusan->nama_jurusan }}" pmr
                             style="height: 160px; object-fit: cover;">
                    @else
                        <div class="d-flex align-items-center justify-content-center bg-light"
                             style="height: 160px;">
                            <span class="text-muted">Tidak ada gambar</span>
                        </div>
                    @endif

                    <div class="card-body">
                        <h6 class="card-title">{{ $jurusan->nama_jurusan }}</h6>
                        <p class="card-text text-muted small">
                            {{ Str::limit($jurusan->deskripsi, 80) }}
                        </p>
                    </div>

                    <div class="card-footer d-flex justify-content-between">
                        <a href="{{ route('jurusan.show', $jurusan->id) }}" class="btn btn-sm btn-info">
                            Detail
                        </a>
                        <a href="{{ route('jurusan.edit', $jurusan->id) }}" class="btn btn-sm btn-warning">
                            Edit
                        </a>
                        <form action="{{ route('jurusan.destroy', $jurusan->id) }}"
                              method="POST"
                              onsubmit="return confirm('Yakin ingin menghapus jurusan ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">
                                Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <p class="text-center text-muted">Belum ada data jurusan.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection
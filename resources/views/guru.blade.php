@extends('layouts.app')

@section('title', 'Data Guru')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Data Guru</h2>
        @if(session('admin_id'))
    <a href="{{ route('guru.create') }}" class="btn btn-primary">
        + Tambah Guru
    </a>
@endif
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-striped align-middle">
        <thead class="table-dark">
            <tr>
                <th style="width: 50px;">No</th>
                <th style="width: 100px;">Foto</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th style="width: 180px;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($gurus as $guru)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        @if ($guru->foto)
                            <img src="{{ asset('storage/' . $guru->foto) }}"
                                 alt="{{ $guru->nama }}"
                                 width="60" height="60"
                                 style="object-fit: cover; border-radius: 6px;">
                        @else
                            <span class="text-muted">-</span>
                        @endif
                    </td>
                    <td>{{ $guru->nip ?? '-' }}</td>
                    <td>{{ $guru->nama }}</td>
                    <td>{{ $guru->jabatan }}</td>
                    <td>
                        <a href="{{ route('guru.show', $guru->id) }}" class="btn btn-sm btn-info">
                            Detail
                        </a>
                        <a href="{{ route('guru.edit', $guru->id) }}" class="btn btn-sm btn-warning">
                            Edit
                        </a>
                        <form action="{{ route('guru.destroy', $guru->id) }}"
                              method="POST"
                              class="d-inline"
                              onsubmit="return confirm('Yakin ingin menghapus data guru ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Belum ada data guru.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
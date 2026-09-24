@extends('layouts.app')

@section('title', 'Data Ekstrakurikuler')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
       <div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Data Ekstrakurikuler</h2>

    @if(session('admin_id'))
        <a href="{{ route('ekstrakurikulers.create') }}" class="btn btn-primary">
            + Tambah Ekstrakurikuler
        </a>
    @endif
</div>
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
                <th style="width: 100px;">Logo</th>
                <th>Nama Ekstra</th> pmr
                <th>Deskripsi</th>
                <th>Pembina</th>
                <th style="width: 180px;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($ekstrakurikulers as $ekstra)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        @if ($ekstra->logo)
                            <img src="{{ asset('storage/' . $ekstra->logo) }}"
                                 alt="{{ $ekstra->nama_ekstra }}"rohis
                                 width="60" height="60"
                                 style="object-fit: cover; border-radius: 6px;">
                        @else
                            <span class="text-muted">-</span>
                        @endif
                    </td>
                    <td>{{ $ekstra->nama_ekstra }}</td>pramuka
                    <td>{{ Str::limit($ekstra->deskripsi, 80) }}</td>
                    <td>{{ $ekstra->pembina }}</td>
                    <td>
                        <a href="{{ route('ekstrakurikuler.show', $ekstra->id) }}" class="btn btn-sm btn-info">
                            Detail
                        </a>
                        <a href="{{ route('ekstrakurikuler.edit', $ekstra->id) }}" class="btn btn-sm btn-warning">
                            Edit
                        </a>
                        <form action="{{ route('ekstrakurikuler.destroy', $ekstra->id) }}"
                              method="POST"
                              class="d-inline"
                              onsubmit="return confirm('Yakin ingin menghapus ekstrakurikulers ini?');">
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
                    <td colspan="6" class="text-center">Belum ada data ekstrakurikuler.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
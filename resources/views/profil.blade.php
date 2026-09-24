@extends('layouts.app')

@section('title', 'Profil Sekolah')

@section('content')
<div class="container py-5">

    {{-- HEADER --}}
    <div class="text-center mb-5">
        @if (!empty($profil->logo))
            <img src="{{ asset('storage/' . $profil->logo) }}"
                 alt="Logo {{ $profil->nama_sekolah }}"smk 1 cijati
                 width="100" height="100"
                 style="object-fit: contain;"
                 class="mb-3">
        @endif
        <h1 class="fw-bold">{{ $profil->nama_sekolah ?? 'SMKN 1 Cijati' }}</h1>
    </div>

    {{-- VISI --}}
    <div class="mb-4">
        <h4 class="fw-bold border-bottom pb-2">Visi</h4>
        <p>{{ $profil->visi ?? '-' }}</p>
    </div>

    {{-- MISI --}}
    <div class="mb-4">
        <h4 class="fw-bold border-bottom pb-2">Misi</h4>
        <p>{{ $profil->misi ?? '-' }}</p>
    </div>

    {{-- SEJARAH --}}
    <div class="mb-4">
        <h4 class="fw-bold border-bottom pb-2">Sejarah</h4>
        <p>{{ $profil->sejarah ?? '-' }}</p>
    </div>

    {{-- TOMBOL EDIT KHUSUS ADMIN --}}
@if(session('admin_id'))
    <div class="text-end">
        <a href="{{ route('profil.edit') }}" class="btn btn-warning">
            Edit Profil
        </a>
    </div>
@endif

</div>
@endsection
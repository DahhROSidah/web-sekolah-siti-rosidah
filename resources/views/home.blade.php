@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

{{-- HERO SECTION --}}
<div class="bg-primary text-white text-center py-5">
    <div class="container">
        <h1 class="fw-bold">
            {{ $profil->nama_sekolah ?? 'SMKN 1 Cijati' }}
        </h1>
        <p class="lead">
            Mencetak generasi unggul, berkarakter, dan siap bersaing di dunia kerja maupun industri.
        </p>
        <a href="{{ route('profil') }}" class="btn btn-light btn-lg mt-2">
            Lihat Profil Sekolah
        </a>
    </div>
</div>

{{-- VISI MISI SINGKAT --}}
@if (isset($profil))
<div class="container py-5">
    <div class="row">
        <div class="col-md-6 mb-4">
            <h4 class="fw-bold">Visi</h4>
            <p>{{ Str::limit($profil->visi, 200) }}</p>
        </div>
        <div class="col-md-6 mb-4">
            <h4 class="fw-bold">Misi</h4>
            <p>{{ Str::limit($profil->misi, 200) }}</p>
        </div>
    </div>
</div>
@endif

{{-- JURUSAN --}}
<div class="bg-light py-5">
    <div class="container">
        <h2 class="text-center fw-bold mb-4">Jurusan / Program Keahlian</h2>
        <div class="row g-3">
            @forelse ($jurusans ?? [] as $jurusan)
                <div class="col-md-3 col-sm-6">
                    <div class="card h-100 text-center shadow-sm">
                        @if ($jurusan->gambar)
                            <img src="{{ asset('storage/' . $jurusan->gambar) }}"
                                 class="card-img-top"
                                 alt="{{ $jurusan->nama_jurusan }}"
                                 style="height: 150px; object-fit: cover;">
                        @endif
                        <div class="card-body">
                            <h6 class="card-title">{{ $jurusan->nama_jurusan }}</h6>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center text-muted">Belum ada data jurusan.</p>
            @endforelse
        </div>
    </div>
</div>

{{-- EKSTRAKURIKULER --}}
<div class="container py-5">
    <h2 class="text-center fw-bold mb-4">Ekstrakurikuler</h2>
    <div class="row g-3">
        @forelse ($ekstrakurikulers ?? [] as $ekstra)
            <div class="col-md-3 col-sm-6">
                <div class="card h-100 text-center shadow-sm">
                    @if ($ekstra->logo)
                        <img src="{{ asset('storage/' . $ekstra->logo) }}"
                             class="card-img-top"
                             alt="{{ $ekstra->nama_ekstra }}"
                             style="height: 150px; object-fit: cover;">
                    @endif
                    <div class="card-body">
                        <h6 class="card-title">{{ $ekstra->nama_ekstra }}</h6>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center text-muted">Belum ada data ekstrakurikuler.</p>
        @endforelse
    </div>
</div>

{{-- GALERI --}}
<div class="bg-light py-5">
    <div class="container">
        <h2 class="text-center fw-bold mb-4">Galeri Sekolah</h2>
        <div class="row g-3">
            @forelse ($galeries ?? [] as $galery)
                <div class="col-md-3 col-sm-6">
                    <img src="{{ asset('storage/' . $galery->file_foto) }}"
                         class="img-fluid rounded shadow-sm"
                         alt="{{ $galery->judul_foto }}"
                         style="height: 150px; width: 100%; object-fit: cover;">
                </div>
            @empty
                <p class="text-center text-muted">Belum ada foto galeri.</p>
            @endforelse
        </div>
        <div class="text-center mt-3">
            <a href="{{ route('galery') }}" class="btn btn-outline-primary">
                Lihat Semua Foto
            </a>
        </div>
    </div>
</div>

{{-- BERITA TERBARU --}}
<div class="container py-5">
    <h2 class="text-center fw-bold mb-4">Berita Terbaru</h2>
    <div class="row g-3">
        @forelse ($beritas ?? [] as $berita)
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    @if ($berita->gambar)
                        <img src="{{ asset('storage/' . $berita->gambar) }}"
                             class="card-img-top"
                             alt="{{ $berita->judul }}"
                             style="height: 180px; object-fit: cover;">
                    @endif
                    <div class="card-body">
                        <h6 class="card-title">{{ $berita->judul }}</h6>
                        <p class="card-text text-muted small">
                            {{ Str::limit(strip_tags($berita->isi_berita), 100) }}
                        </p>
                        <a href="{{ route('berita.show', $berita->slug ?? $berita->id) }}"
                           class="btn btn-sm btn-primary">
                            Baca Selengkapnya
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center text-muted">Belum ada berita.</p>
        @endforelse
    </div>
</div>

@endsection
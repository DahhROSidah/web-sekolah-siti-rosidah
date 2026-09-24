@extends('layouts.app')

@section('title', 'Daftar Berita')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Berita Terbaru</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @forelse ($beritas as $berita)
            <div class="bg-white rounded-lg shadow overflow-hidden">
                @if ($berita->gambar)
                    <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}" class="w-full h-40 object-cover">
                @endif

                <div class="p-4">
                    <h2 class="font-semibold text-lg mb-2">
                        <a href="{{ route('berita.show', $berita->slug) }}" class="hover:text-blue-600">
                            {{ $berita->judul }}
                        </a>
                    </h2>
                    <p class="text-sm text-gray-500 mb-2">
                        {{ $berita->penulis ?? 'Admin' }} &middot; {{ $berita->created_at->diffForHumans() }}
                    </p>
                    <p class="text-gray-700 text-sm">
                        {{ Str::limit(strip_tags($berita->isi), 100) }}
                    </p>
                </div>
            </div>
        @empty
            <p class="col-span-3 text-center text-gray-500">Belum ada berita.</p>
        @endforelse
    </div>

    <div class="mt-8">
        {{-- {{ $beritas->links() }} --}}
    </div>
@endsection
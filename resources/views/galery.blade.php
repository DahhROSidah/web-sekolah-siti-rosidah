@extends('layouts.app')

@section('title', 'Galery - SMKN 1 CIJATI')

@section('content')

<style>
    .galery-container {
        padding: 50px 8%;
        background: #f5f7fa;
        min-height: 80vh;
    }

    .galery-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
        gap: 20px;
    }

    .galery-header h1 {
        margin: 0;
        font-size: 32px;
    }

    .btn-tambah {
        background: #198754;
        color: white;
        padding: 12px 20px;
        text-decoration: none;
        border-radius: 8px;
    }

    .btn-tambah:hover {
        background: #157347;
    }

    .alert {
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 8px;
        background: #d1e7dd;
        color: #0f5132;
    }

    .galery-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
    }

    .galery-card {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,.08);
    }

    .galery-card img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        display: block;
    }

    .galery-content {
        padding: 20px;
    }

    .galery-content h3 {
        margin-top: 0;
        margin-bottom: 15px;
    }

    .aksi {
        display: flex;
        gap: 8px;
        margin-top: 15px;
    }

    .btn-edit,
    .btn-hapus {
        border: none;
        padding: 9px 14px;
        border-radius: 6px;
        cursor: pointer;
        text-decoration: none;
        color: white;
    }

    .btn-edit {
        background: #0d6efd;
    }

    .btn-hapus {
        background: #dc3545;
    }

    .kosong {
        background: white;
        padding: 40px;
        text-align: center;
        border-radius: 10px;
    }

    @media (max-width: 900px) {
        .galery-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 600px) {
        .galery-grid {
            grid-template-columns: 1fr;
        }

        .galery-header {
            flex-direction: column;
            align-items: flex-start;
        }
    }
</style>

<div class="galery-container">

    <div class="galery-header">

        <div>
            <h1>Galery</h1>
            <p>Dokumentasi kegiatan SMKN 1 CIJATI</p>
        </div>

        <a href="{{ route('galery.create') }}" class="btn-tambah">
            + Tambah Foto
        </a>

    </div>


    @if(session('success'))
        <div class="alert">
            {{ session('success') }}
        </div>
    @endif


    @if($galeries->count() > 0)

        <div class="galery-grid">

            @foreach($galeries as $galery)

                <div class="galery-card">

                    @if($galery->file_foto)
                        <img
                            src="{{ asset('storage/' . $galery->file_foto) }}"
                            alt="{{ $galery->judul_foto }}"
                        >
                    @else
                        <div style="
                            height:220px;
                            display:flex;
                            align-items:center;
                            justify-content:center;
                            background:#eee;
                        ">
                            Tidak ada foto
                        </div>
                    @endif

                    <div class="galery-content">

                        <h3>
                            {{ $galery->judul_foto }}
                        </h3>

                        <div class="aksi">

                            <a
                                href="{{ route('galery.edit', $galery->id) }}"
                                class="btn-edit"
                            >
                                Edit
                            </a>

                            <form
                                action="{{ route('galery.destroy', $galery->id) }}"
                                method="POST"
                                onsubmit="return confirm('Yakin ingin menghapus foto ini?')"
                            >

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="btn-hapus"
                                >
                                    Hapus
                                </button>

                            </form>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    @else

        <div class="kosong">
            <h3>Belum ada foto</h3>
            <p>Silakan tambahkan foto galery.</p>
        </div>

    @endif

</div>

@endsection
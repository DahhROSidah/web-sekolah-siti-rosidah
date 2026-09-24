@extends('layouts.app')

@section('title', 'Tambah Galery')

@section('content')

<div style="
    padding:50px 8%;
    background:#f5f7fa;
    min-height:80vh;
">

    <div style="
        max-width:600px;
        margin:auto;
        background:white;
        padding:30px;
        border-radius:12px;
        box-shadow:0 4px 15px rgba(0,0,0,.08);
    ">

        <h1>Tambah Foto Galery</h1>

        @if($errors->any())
            <div style="
                background:#f8d7da;
                color:#842029;
                padding:15px;
                border-radius:8px;
                margin-bottom:20px;
            ">

                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

            </div>
        @endif

        <form
            action="{{ route('galery.store') }}"
            method="POST"
            enctype="multipart/form-data"
        >

            @csrf

            <div style="margin-bottom:20px;">

                <label>Judul Foto</label>

                <input
                    type="text"
                    name="judul_foto"
                    value="{{ old('judul_foto') }}"
                    required
                    style="
                        width:100%;
                        padding:12px;
                        margin-top:8px;
                        border:1px solid #ccc;
                        border-radius:6px;
                    "
                >

            </div>


            <div style="margin-bottom:20px;">

                <label>Foto</label>

                <input
                    type="file"
                    name="file_foto"
                    accept=".jpg,.jpeg,.png"
                    required
                    style="
                        width:100%;
                        padding:12px;
                        margin-top:8px;
                    "
                >

                <small>
                    Format JPG, JPEG, PNG. Maksimal 5 MB.
                </small>

            </div>


            <button
                type="submit"
                style="
                    background:#198754;
                    color:white;
                    border:none;
                    padding:12px 20px;
                    border-radius:7px;
                    cursor:pointer;
                "
            >
                Simpan
            </button>


            <a
                href="{{ route('galery') }}"
                style="
                    margin-left:10px;
                    text-decoration:none;
                "
            >
                Kembali
            </a>

        </form>

    </div>

</div>

@endsection
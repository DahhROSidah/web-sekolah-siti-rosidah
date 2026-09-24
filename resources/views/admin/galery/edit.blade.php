@extends('layouts.app')

@section('title', 'Edit Galery')

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

        <h1>Edit Foto Galery</h1>

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
            action="{{ route('galery.update', $galery->id) }}"
            method="POST"
            enctype="multipart/form-data"
        >

            @csrf
            @method('PUT')


            <div style="margin-bottom:20px;">

                <label>Judul Foto</label>

                <input
                    type="text"
                    name="judul_foto"
                    value="{{ old('judul_foto', $galery->judul_foto) }}"
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


            @if($galery->file_foto)

                <div style="margin-bottom:20px;">

                    <p>Foto saat ini:</p>

                    <img
                        src="{{ asset('storage/' . $galery->file_foto) }}"
                        alt="{{ $galery->judul_foto }}"
                        style="
                            width:250px;
                            height:180px;
                            object-fit:cover;
                            border-radius:8px;
                        "
                    >

                </div>

            @endif


            <div style="margin-bottom:20px;">

                <label>Ganti Foto</label>

                <input
                    type="file"
                    name="file_foto"
                    accept=".jpg,.jpeg,.png"
                    style="
                        width:100%;
                        padding:12px;
                        margin-top:8px;
                    "
                >

                <small>
                    Kosongkan jika tidak ingin mengganti foto.
                </small>

            </div>


            <button
                type="submit"
                style="
                    background:#0d6efd;
                    color:white;
                    border:none;
                    padding:12px 20px;
                    border-radius:7px;
                    cursor:pointer;
                "
            >
                Update
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
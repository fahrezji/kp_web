@include('notifikasi.pesan')
@extends('layout.main')
@section('title')
    Tambah Data Komentar Tamu
    @endsection

    @section('konten')

<form method="post" action="/komen" enctype="multipart/form-data">
    @csrf


    <div class="mb-3">
        <label for="nama" class="form-label"> Nama tamu </label>
        <input type="text" class="form-control" name='nama' id="nama">
    </div>


    <div class="mb-3">
        <label for="email" class="form-label"> Email </label>
        <input type="text" class="form-control" name='email' id="email">
    </div>

    <div class="mb-3">
        <label for="komentar" class="form-label"> Komentar </label>
        <input type="text" class="form-control" name='komentar' id="komentar">
    </div>


    {{-- <div class="mb-3">
        <label for="gambar" class="form-label"> Gambar </label>
        <input type="file" class="form-control" name='gambar' id="gambar">
    </div> --}}




    <div>
        <button class="btn btn-secondary btn-sm" type="submit"> + Tambah Data </button>
    </div>
    </div>

@endsection

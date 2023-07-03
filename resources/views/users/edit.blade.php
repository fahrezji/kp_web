@include('notifikasi.pesan')
@extends('layout.main')
@section('title')
    Edit Data Daftar Tamu
    @endsection

    @section('konten')
<a href='/users' class="btn btn-secondary"> << Kembali </a>

    <form method="post" action="{{'/users/'.$data->id}}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-5 mt-5">
        <div class="mb-3">
            <h1> Nama Tamu : {{$data->name}}</h1>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label"> Nama Tamu </label>
            <input type="text" class="form-control" name='name' id="name" value="{{$data->name}}">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label"> Email </label>
            <input type="text" class="form-control" name='email' id="email" value="{{$data->email}}">
        </div>

        <div class="mb-3">
            <label for="telepon" class="form-label"> No Telpon </label>
            <input type="text" class="form-control" name='telepon' id="telepon" value="{{$data->telepon}}">
        </div>


        {{-- @if ($data->gambar)
        <div class="mb-3">
            <img style="max-width:50px;max-height:50px" src="{{ url('gambar') . '/' .$data->gambar }}">
        </div>
        @endif
       <div class="mb-3">
        <label for="gambar" class="form-label"> Gambar </label>
        <input type="file" class="form-control" name="gambar" id="gambar">
       </div> --}}


<div>
    <button class="btn btn-secondary btn-sm" type="submit"> Edit Data </button>
</div>
        </div>
    </form>
@endsection

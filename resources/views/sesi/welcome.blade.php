@extends('layout.project')

@section('konten')

    <div class="w-50 text-center border rounded px-3 py-3 mx-auto">
        <h1>Selamat Datang </h1>
        <p> Silahkan login atau register untuk masuk ke aplikasi </p>
        <a href="/sesi" class="btn btn-primary btn-lg"> LOGIN </a>
        <a href="/sesi/register" class="btn btn-success btn-lg"> REGISTER </a>
    </div>
    @endsection

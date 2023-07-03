@extends('layout.main')
{{-- @include('notifikasi.pesan')
@include('notifikasi.menu') --}}
@yield('konten')

@section('title')
    Selamat Datang di Web UAS Kelompok 3
    @endsection

    @section('konten')

<!-- Main content -->

<section class="content">
    <div class="container-fluid">
      <h5 class="mb-2">Info Komentar</h5>
      <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-info"><i class="fas fa-comments"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Komentar</span>
              <span class="info-box-number">{{ $komen_count }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-success"><i class="nav-icon fas fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Info Tamu</span>
              <span class="info-box-number">{{ $user_count }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

        <!-- /.col -->
        {{-- <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Uploads</span>
              <span class="info-box-number">13,648</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Likes</span>
              <span class="info-box-number">93,139</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div> --}}
      <!-- /.row -->

  @endsection

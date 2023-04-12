@extends('layouts.template')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Keluarga</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href={{route('dashboard')}}>Home</a></li>
              <li class="breadcrumb-item active">Daftar Keluarga</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Tambah atau Edit Data Keluarga</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <form method="POST" action="{{ $url_form}}">
                    @csrf
                    {!! (isset($model))? method_field('PUT') : '' !!}   

                    <div class="form-group">
                        <label>NIK</label>
                        <input class="form-control @error('nik') is-invalid @enderror" value="{{ isset($model)? $model->nik : old('nik')}}" name="nik" type="text">
                        @error('nik')
                            <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control @error('nama_hobi') is-invalid @enderror" value="{{ isset($model)? $model->nama : old('nama')}}" name="nama" type="text">
                        @error('nama_hobi')
                            <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input class="form-control @error('tanggal_lahir') is-invalid @enderror" value="{{ isset($model)? $model->tanggal_lahir : old('tanggal_lahir')}}" name="tanggal_lahir" type="date">
                        @error('tanggal_lahir')
                            <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <input class="form-control @error('gender') is-invalid @enderror" value="{{ isset($model)? $model->gender : old('gender')}}" name="gender" type="text">
                        @error('gender')
                            <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Hubungan</label>
                        <input class="form-control @error('hubungan') is-invalid @enderror" value="{{ isset($model)? $model->hubungan : old('hubungan')}}" name="hubungan" type="text">
                        @error('hubungan')
                            <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Submit" class="btn btn-sm btn-success my-2">
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
@endsection

@push('custom_js')
<script>
    alert('Welcome')
</script>
@endpush
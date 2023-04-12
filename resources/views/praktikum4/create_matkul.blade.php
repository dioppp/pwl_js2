@extends('layouts.template')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Mata Kuliah</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href={{route('dashboard')}}>Home</a></li>
              <li class="breadcrumb-item active">Daftar Mata Kuliah</li>
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
              <h3 class="card-title">Tambah atau Edit Data Mata Kuliah</h3>

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
                        <label>Kode Mata Kuliah</label>
                        <input class="form-control @error('kode_mk') is-invalid @enderror" value="{{ isset($model)? $model->kode_mk : old('kode_mk')}}" name="kode_mk" type="text">
                        @error('kode_mk')
                            <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Nama Mata Kuliah</label>
                        <input class="form-control @error('nama') is-invalid @enderror" value="{{ isset($model)? $model->nama : old('nama')}}" name="nama" type="text">
                        @error('nama_hobi')
                            <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Semester</label>
                        <input class="form-control @error('semester') is-invalid @enderror" value="{{ isset($model)? $model->semester : old('semester')}}" name="semester" type="int">
                        @error('semester')
                            <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Jumlah SKS</label>
                        <input class="form-control @error('sks') is-invalid @enderror" value="{{ isset($model)? $model->sks : old('sks')}}" name="sks" type="int">
                        @error('sks')
                            <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Jam</label>
                        <input class="form-control @error('jam') is-invalid @enderror" value="{{ isset($model)? $model->jam : old('jam')}}" name="jam" type="int">
                        @error('jam')
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
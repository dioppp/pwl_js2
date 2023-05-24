@extends('layouts.template')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Mahasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href={{route('dashboard')}}>Home</a></li>
              <li class="breadcrumb-item active">Data Mahasiswa</li>
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
                        <h3 class="card-title">Data Mahasiswa</h3>
    
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

                        <div class="container mt-5">
                            <div class="row justify-content-center align-items-center">
                                <div class="card" style="width: 24rem">
                                    <div class="card-header">Detail Mahasiswa</div>
                                    <div class="card-body">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><b>NIM : </b>{{$mhs->nim}}</li>
                                            <li class="list-group-item"><b>Nama : </b>{{$mhs->nama}}</li>
                                            <li class="list-group-item"><b>Foto : </b>{{$mhs->foto}}</li>
                                            <li class="list-group-item"><b>Kelas : </b>{{$mhs->kelas->nama_kelas}}</li>
                                            <li class="list-group-item"><b>Jenis Kelamin : </b>{{$mhs->jk}}</li>
                                            <li class="list-group-item"><b>No. HP : </b>{{$mhs->hp}}</li>
                                        </ul>
                                    </div>
                                    <a class="btn btn-success mt-3" href="{{route('mahasiswa.index')}}">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- /.card-body -->
                </div>
            <!-- /.card -->
            </div>
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection

@push('custom_js')
<script>
    alert('Welcome')
</script>
@endpush
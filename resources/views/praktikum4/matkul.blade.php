@extends('layouts.template')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mata Kuliah</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href={{route('dashboard')}}>Home</a></li>
              <li class="breadcrumb-item active">Mata Kuliah</li>
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
              <h3 class="card-title">Daftar Mata Kuliah</h3>

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
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>Kode Mata Kuliah</th>
                    <th>Nama</th>
                    <th>Semester</th>
                    <th>SKS</th>
                    <th>Jam</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $i)
                      <tr>
                        <td>{{$i -> kode_mk}}</td>
                        <td>{{$i -> nama}}</td>
                        <td>{{$i -> semester}}</td>
                        <td>{{$i -> sks}}</td>
                        <td>{{$i -> jam}}</td>
                      </tr>
                  @endforeach
                </tbody>
              </table>
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
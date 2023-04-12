@extends('layouts.template')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Hobi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href={{route('dashboard')}}>Home</a></li>
              <li class="breadcrumb-item active">Hobi</li>
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
              <h3 class="card-title">Daftar Hobi</h3>

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

              <a href="{{url('/hobi/create')}}" class="btn btn-sm btn-success my-2">Tambah Data</a>
          
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Hobi</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @if($model->count() > 0)
                    @foreach($model as $i => $m)
                      <tr>
                        <td>{{++$i}}</td>
                        <td>{{$m->nama_hobi}}</td>
                        <td>
                          <!-- Bikin tombol edit dan delete -->
                          <a href="{{ url('/hobi/'. $m->id.'/edit') }}" class="btn btn-sm btn-warning">edit</a>
          
                          <form method="POST" action="{{ url('/hobi/'.$m->id) }}" >
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">hapus</button>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                  @else
                    <tr><td colspan="6" class="text-center">Data tidak ada</td></tr>
                  @endif
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
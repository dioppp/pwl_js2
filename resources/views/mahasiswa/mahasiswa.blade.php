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

                <a href="{{url('mahasiswa/create')}}" class="btn btn-sm btn-success my-2">Tambah Data</a>
            
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>NIM</th>
                      <th>Nama</th>
                      <th>Foto</th>
                      <th>Kelas</th>
                      <th>JK</th>
                      <th>HP</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($mhs->count() > 0)
                      @foreach($paginate as $m)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$m->nim}}</td>
                          <td>{{$m->nama}}</td>
                          <td><img src="storage/{{ $m->foto }}" width="100px"></td>
                          <td>{{$m->kelas->nama_kelas}}</td>
                          <td>{{$m->jk}}</td>
                          <td>{{$m->hp}}</td>
                          <td>
                            <!-- Bikin tombol show, edit, dan delete -->
                            <a href="{{ url('/mahasiswa/'. $m->id) }}" class="btn btn-sm btn-primary">Show</a>

                            <a href="{{ url('/mahasiswa/'. $m->id.'/edit') }}" class="btn btn-sm btn-warning">Edit</a>

                            <a href="{{ route('mahasiswa.khs', $m->id) }}" class="btn btn-sm btn-secondary">KHS</a>
            
                            <form method="POST" action="{{ url('/mahasiswa/'.$m->id) }}" >
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-sm btn-danger">Delete</button>
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
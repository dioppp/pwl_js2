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
              <h3 class="card-title">Edit Data Mahasiswa</h3>

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
                @if($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input. <br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="POST" action="{{ route('mahasiswa.update', $mahasiswa->id)}}" id="myForm">
                  @csrf
                  @method('PUT')
                  <div class="form-group">
                      <label for="nim">NIM</label>
                      <input type="text" name="nim" class="form-control" id="nim" value="{{$mahasiswa->nim}}" aria-describedby="nim">
                  </div>

                  <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" name="nama" class="form-control" id="nama" value="{{$mahasiswa->nama}}" aria-describedby="nama">
                  </div>

                  <div class="form-group">
                      <label for="kelas">Kelas</label>
                          <select name="kelas" class="form-control">
                          @foreach($kelas as $kls)
                              <option value="{{$kls->id}}" {{$mahasiswa->kelas_id == $kls->id ? 'selected' : '' }}>{{$kls->nama_kelas}}</option>
                          @endforeach
                          </select>
                  </div>

                  <div class="form-group">
                      <label for="jk">Jenis Kelamin</label>
                      <input type="text" name="jk" class="form-control" id="jk" value="{{$mahasiswa->jk}}" aria-describedby="jk">
                  </div>

                  <div class="form-group">
                      <label for="tempat_lahir">Tempat Lahir</label>
                      <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" value="{{$mahasiswa->tempat_lahir}}" aria-describedby="tempat_lahir">
                  </div>

                  <div class="form-group">
                      <label for="tanggal_lahir">Tanggal Lahir</label>
                      <input type="text" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="{{$mahasiswa->tanggal_lahir}}" aria-describedby="tanggal_lahir">
                  </div>

                  <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <input type="text" name="alamat" class="form-control" id="alamat" value="{{$mahasiswa->alamat}}" aria-describedby="alamat">
                  </div>

                  <div class="form-group">
                      <label for="hp">HP</label>
                      <input type="text" name="hp" class="form-control" id="hp" value="{{$mahasiswa->hp}}" aria-describedby="hp">
                  </div>

                  <div class="form-group">
                      <input type="submit" value="Save" class="btn btn-sm btn-success my-2">
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
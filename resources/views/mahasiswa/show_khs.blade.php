@extends('layouts.template')
@section('content')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="col-sm-12 text-center">
                <h2>JURUSAN TEKNOLOGI INFORMASI - POLITEKNIK NEGERI MALANG</h2>
                <br>
                <h1>KARTU HASIL STUDI (KHS)</h1>
            </div>
            <br><br>
            <div class="card-header">
                <div class="card-title">
                    <div>NIM            : {{$mhs->nim}}</div>
                    <div>Nama           : {{$mhs->nama}}</div>
                    <div>Gender         : {{$mhs->jk}}</div>
                    <div>Tempat Lahir   : {{$mhs->tempat_lahir}}</div>
                    <div>Tanggil Lahir  : {{$mhs->tanggal_hari}}</div>
                    <div>Alamat         : {{$mhs->alamat}}</div>
                    <div>No. HP         : {{$mhs->hp}}</div>
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
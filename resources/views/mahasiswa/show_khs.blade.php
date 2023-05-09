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
                    <div><b>Nama</b>   : {{$mhs->nama}}</div>
                    <div><b>NIM</b>    : {{$mhs->nim}}</div>
                    <div><b>Kelas</b>  : {{$mhs->kelas->nama_kelas}}</div>
                </div>
            </div>

            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>Mata Kuliah</th>
                            <th>SKS</th>
                            <th>Semester</th>
                            <th>Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($mhsmatkul->count() > 0)
                        @foreach ($mhsmatkul as $m)
                            <tr>
                                <td>{{$m->matkul->nama}}</td>
                                <td>{{$m->matkul->sks}}</td>
                                <td>{{$m->matkul->semester}}</td>
                                <td>{{$m->nilai_huruf}}</td>
                            </tr>
                        @endforeach
                        @else
                        <tr>
                            <td class="text-center" colspan="4">
                                Data tidak ada
                            </td>
                        </tr>
                        @endif
                    </tbody>
                </table>
                <br>
                <a class="btn btn-success mt3" href="{{ route('mahasiswa.index')}}">Kembali</a>
            </div>
            <div class="card-footer">
                Footer
            </div>
        </div>
    </section>
</div>
@endsection
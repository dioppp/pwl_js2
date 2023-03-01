@extends('layouts.template')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengalaman Kuliah</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href={{route('dashboard')}}>Home</a></li>
              <li class="breadcrumb-item active">Pengalaman Kuliah</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Pengalaman Kuliah</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          Saya menempuh pendidikan di Politeknik Negeri Malang tepatnya di Jurusan Teknologi Informasi. Saat ini saya sudah memasuki
          semester 4. Pengalaman saya di dunia perkuliahan lumayan banyak. Bisa dibilang saya termasuk golongan mahasiswa kura-kura
          alias kuliah rapat kuliah rapat wkwk. Yap, betul, saya aktif di organisasi yaitu Himpunan Mahasiswa Teknologi Informasi.
          Awalnya saya rating bintang 1 karena saking banyaknya kegiatan dan rendahnya skill manajemen waktu yang saya punya. Namun,
          seiring berjalannya waktu saya mulai menaikkan rating-nya yaa kira-kira jadi 2, ngga, becanda. Yaa 4 lah ya. Karena di sini
          saya belajar banyak hal di luar materi perkuliahan dan mendapatkan banyak teman. Yap, teman loh yaa. Dan saat ini saya
          menjabat sebagai Ketua Departemen Internal, artinya tanggung jawab yang saya emban juga semakin besar dan harus lebih bisa
          membagi waktu antara organisasi dan kuliah. Jangan sampai berat sebelah karena yang berlebihan itu tidak baik.
          Yok semangat semester 4, dude.
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  @endsection
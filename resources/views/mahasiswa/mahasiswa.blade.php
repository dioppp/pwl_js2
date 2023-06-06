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
                            <li class="breadcrumb-item"><a href={{ route('dashboard') }}>Home</a></li>
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
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Search">

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

                            <button class="btn btn-sm btn-success my-2" data-toggle="modal"
                                data-target="#modal_mahasiswa">Tambah Data</button>

                            <table class="table table-bordered table-striped" id="data_mahasiswa">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

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

    <div class="modal fade" id="modal_mahasiswa" style="display: none;" aria-hidden="true">
        <form method="post" action="{{ url('mahasiswa') }}" role="form" class="form-horizontal" id="form_mahasiswa">
            @csrf
            <div class="modal-dialog modal-">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Data Mahasiswa</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row form-message"></div>
                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label">NIM</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="nim" name="nim"
                                    value="" />
                            </div>
                        </div>

                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="nama" name="nama"
                                    value="" />
                            </div>
                        </div>

                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label">Kelas</label>
                            <div class="col-sm-10">
                                <select name="kelas_id" class="form-control form-control-sm" id="kelas">
                                    @foreach ($kelas as $kls)
                                        <option value="{{ $kls->id }}">{{ $kls->nama_kelas }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="jk" name="jk"
                                    value="" />
                            </div>
                        </div>

                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label">Tempat Lahir</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="tempat_lahir"
                                    name="tempat_lahir" value="" />
                            </div>
                        </div>

                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control form-control-sm" id="tanggal_lahir"
                                    name="tanggal_lahir" value="" />
                            </div>
                        </div>

                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="alamat" name="alamat"
                                    value="" />
                            </div>
                        </div>

                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label">No. HP</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="hp" name="hp"
                                    value="" />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="modal fade" id="detail_mahasiswa" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Detail Mahasiswa</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row sm-2">
                        <div class="col-sm-3"><b>NIM</b></div>
                        <div class="col-sm-9" id="nim"></div>
                    </div>
                    <br>
                    <div class="row sm-2">
                        <div class="col-sm-3"><b>Nama</b></div>
                        <div class="col-sm-9" id="nama"></div>
                    </div>
                    <br>
                    <div class="row sm-2">
                        <div class="col-sm-3"><b>Kelas</b></div>
                        <div class="col-sm-9" id="kelas"></div>
                    </div>
                    <br>
                    <div class="row sm-2">
                        <div class="col-sm-3"><b>Jenis Kelamin</b></div>
                        <div class="col-sm-9" id="jk"></div>
                    </div>
                    <br>
                    <div class="row sm-2">
                        <div class="col-sm-3"><b>Tempat Lahir</b></div>
                        <div class="col-sm-9" id="tempat_lahir"></div>
                    </div>
                    <br>
                    <div class="row sm-2">
                        <div class="col-sm-3"><b>Tanggal Lahir</b></div>
                        <div class="col-sm-9" id="tanggal_lahir"></div>
                    </div>
                    <br>
                    <div class="row sm-2">
                        <div class="col-sm-3"><b>Alamat</b></div>
                        <div class="col-sm-9" id="alamat"></div>
                    </div>
                    <br>
                    <div class="row sm-2">
                        <div class="col-sm-3"><b>No. HP</b></div>
                        <div class="col-sm-9" id="hp"></div>
                    </div>
                    <br>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('custom_js')
    <script>
        function updateData(th) {
            $('#modal_mahasiswa').modal('show');
            $('#modal_mahasiswa .modal-title').html('Edit Data Mahasiswa');
            $('#modal_mahasiswa #nim').val($(th).data('nim'));
            $('#modal_mahasiswa #nama').val($(th).data('nama'));
            $('#modal_mahasiswa #kelas').val($(th).data('kelas_id'));
            $('#modal_mahasiswa #jk').val($(th).data('jk'));
            $('#modal_mahasiswa #tempat_lahir').val($(th).data('tempat_lahir'));
            $('#modal_mahasiswa #tanggal_lahir').val($(th).data('tanggal_lahir'));
            $('#modal_mahasiswa #alamat').val($(th).data('alamat'));
            $('#modal_mahasiswa #hp').val($(th).data('hp'));
            $('#modal_mahasiswa #form_mahasiswa').attr('action', $(th).data('url'));
            $('#modal_mahasiswa #form_mahasiswa').append('<input type="hidden" name="_method" value="PUT">');
        }

        function detail(th) {
            $('#detail_mahasiswa').modal('show');
            $('#detail_mahasiswa .modal-title').html('Detail Mahasiswa');
            $('#detail_mahasiswa #nim').html($(th).data('nim'));
            $('#detail_mahasiswa #nama').html($(th).data('nama'));
            if ($(th).data('jk') == 'l') {
                $('#detail_mahasiswa #jk').html('Laki-laki');
            } else {
                $('#detail_mahasiswa #jk').html('Perempuan');
            }
            $('#detail_mahasiswa #kelas').html($(th).data('kls'));
            $('#detail_mahasiswa #tempat_lahir').html($(th).data('tempat_lahir'));
            $('#detail_mahasiswa #tanggal_lahir').html($(th).data('tanggal_lahir'));
            $('#detail_mahasiswa #alamat').html($(th).data('alamat'));
            $('#detail_mahasiswa #hp').html($(th).data('hp'));
        }

        function deleteData(th) {
            var url = $(th).data('url');
            var c = confirm('Apakah anda yakin ingin menghapus data ini?');
            if (c == true) {
                $.ajax({
                    url: url,
                    method: "POST",
                    data: {
                        _method: 'DELETE',
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(data) {
                        if (data.status) {
                            alert(data.message);
                            dataMahasiswa.ajax.reload();
                        } else {
                            alert(data.message);
                        }
                    }
                });
            }
        }

        $(document).ready(function() {
            var dataMahasiswa = $('#data_mahasiswa').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    'url': '{{ url('mahasiswa/data') }}',
                    'dataType': 'json',
                    'type': 'POST',
                },
                columns: [{
                        data: 'nomor',
                        name: 'nomor',
                        searchable: false,
                        sortable: false
                    },
                    {
                        data: 'nim',
                        name: 'nim',
                        sortable: false,
                        searchable: true
                    },
                    {
                        data: 'nama',
                        name: 'nama',
                        sortable: false,
                        searchable: true
                    },
                    {
                        data: 'kelas.nama_kelas',
                        name: 'kelas.nama_kelas',
                        sortable: false,
                        searchable: true
                    },
                    {
                        data: 'jk',
                        name: 'jk',
                        sortable: false,
                        searchable: true
                    },
                    {
                        data: 'id',
                        name: 'id',
                        sortable: false,
                        searchable: false,
                        render: function(data, type, row, meta) {
                            var btn = `<button data-url="{{ url('/mahasiswa') }}/` + data +
                                `" class="btn btn-xs btn-warning" onclick="updateData(this)" data-id="` +
                                row.id + `"
                                  data-nim="` + row.nim + `" data-nama="` + row.nama + `" data-kelas_id="` + row
                                .kelas_id + `"
                                  data-jk="` + row.jk + `" data-tempat_lahir="` + row.tempat_lahir +
                                `" data-tanggal_lahir="` + row.tanggal_lahir + `" 
                                  data-alamat="` + row.alamat + `" data-hp="` + row.hp +
                                `"><i class="fa fa-edit"></i> Edit</button>` +

                                `<button data-url="{{ url('/mahasiswa') }}/` + data +
                                `" class="btn btn-xs btn-info" onclick="detail(this)" data-id="` +
                                row.id + `"
                                  data-nim="` + row.nim + `" data-nama="` + row.nama + `" data-kls="` + row
                                .kelas.nama_kelas + `"
                                  data-jk="` + row.jk + `" data-tempat_lahir="` + row.tempat_lahir +
                                `" data-tanggal_lahir="` + row.tanggal_lahir + `" 
                                  data-alamat="` + row.alamat + `" data-hp="` + row.hp +
                                `"><i class="fa fa-list"></i> Detail</button>` +

                                `<form method="POST" action="{{ url('/mahasiswa') }}/` + data + `">
                                    @csrf @method('DELETE')
                                    <button data-url="{{ url('/mahasiswa') }}/` + data +
                                `" type="submit" class="btn btn-xs btn-danger
                                 onclick="deleteData(this)"><i class="fa fa-trash"></i> Hapus</button>
                                </form>`;
                            return btn;
                        }
                    },

                ]
            });

            $('#form_mahasiswa').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    url: $(this).attr('action'),
                    method: "POST",
                    data: $(this).serialize(),
                    dataType: 'json',
                    success: function(data) {
                        $('.form-message').html('');
                        if (data.status) {
                            $('.form-message').html(
                                '<span class="alert alert-success" style="width: 100%">' +
                                data.message + '</span>');
                            $('#form_mahasiswa')[0].reset();
                            dataMahasiswa.ajax.reload();
                            $('#form_mahasiswa').attr('action', '{{ url('mahasiswa') }}');
                            $('#form_mahasiswa').find('input[name="_method"]').remove();
                        } else {
                            $('.form-message').html(
                                '<span class="alert alert-danger" style="width: 100%">' +
                                data.message + '</span>');
                            alert('error');
                        }

                        if (data.modal_close) {
                            $('.form-message').html('');
                            $('#modal_mahasiswa').modal('hide');
                        }

                    }
                });
            });
        });
    </script>
@endpush

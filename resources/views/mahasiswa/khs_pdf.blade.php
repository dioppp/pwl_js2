<!DOCTYPE html>
<html>

<head>
    <title>Kartu Hasil Studi</title>
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h2>JURUSAN TEKNOLOGI INFORMASI - POLITEKNIK NEGERI MALANG</h2>
            <br>
        <h1>KARTU HASIL STUDI (KHS)</h1>
    </center>
    <br><br>
    <div class="card-header">
        <div class="card-title">
            <div><b>Nama</b>   : {{$mhs->nama}}</div>
            <div><b>NIM</b>    : {{$mhs->nim}}</div>
            <div><b>Kelas</b>  : {{$mhs->kelas->nama_kelas}}</div>
        </div>
    </div>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>Mata Kuliah</th>
                <th>SKS</th>
                <th>Semester</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mhsmatkul as $m)
                <tr>
                    <td>{{$m->matkul->nama}}</td>
                    <td>{{$m->matkul->sks}}</td>
                    <td>{{$m->matkul->semester}}</td>
                    <td>{{$m->nilai_huruf}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>

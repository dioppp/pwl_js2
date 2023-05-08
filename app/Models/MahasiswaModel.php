<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{
    use HasFactory;
    protected $table = 'mahasiswas';
    protected $fillable = [
        'nim',
        'nama',
        'jk',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'hp',
        'kelas_id'
    ];

    public function kelas(){
        return $this->belongsTo(Kelas::class, 'kelas_id', 'id');
    }

    public function mahasiswa_matakuliah(){
        return $this->hasMany(Mahasiswa_Matakuliah::class, 'mahasiswa_id', 'id');
    }
}

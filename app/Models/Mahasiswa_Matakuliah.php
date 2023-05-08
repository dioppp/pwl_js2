<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa_Matakuliah extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa__matakuliahs';
    protected $fillable = [
        'mahasiswa_id',
        'matakuliah_id',
        'nilai'
    ];

    public function mahasiswa(){
        return $this->belongsTo(MahasiswaModel::class, 'mahasiswa_id', 'id');
    }

    public function matkul(){
        return $this->belongsTo(MatkulModel::class, 'matakuliah_id', 'kode_mk');
    }
}

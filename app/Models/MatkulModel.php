<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatkulModel extends Model
{
    use HasFactory;

    protected $table='matkul_models';
    protected $primaryKey='kode_mk';
    protected $keyType='string';
    protected $fillable = [
        'kode_mk',
        'nama',
        'semester',
        'sks',
        'jam'
    ];

    public function mahasiswa_matkul(){
        return $this->hasMany(Mahasiswa_Matakuliah::class, 'matakuliah_id', 'kode_mk');
    }
}

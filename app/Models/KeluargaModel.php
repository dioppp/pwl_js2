<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeluargaModel extends Model
{
    use HasFactory;
    protected $table='keluarga_models';
    protected $primaryKey='nik';
    protected $keyType='string';
    protected $fillable = [
        'nik',
        'nama',
        'tanggal_lahir',
        'gender',
        'hubungan'
    ];
}

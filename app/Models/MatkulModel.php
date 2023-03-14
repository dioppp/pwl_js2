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
}

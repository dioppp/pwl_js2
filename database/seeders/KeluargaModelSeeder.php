<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeluargaModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keluarga_models')->insert([[
            'nik' => '3574040311700001',
            'nama' => 'Gangsar Oetojo',
            'tanggal_lahir' => '1970-11-03',
            'gender' => 'Laki-laki',
            'hubungan' => 'Ayah',
        ],[
            'nik' => '3574040803730001',
            'nama' => 'Hefri Purnami Dewi Sebti',
            'tanggal_lahir' => '1973-03-08',
            'gender' => 'Perempuan',
            'hubungan' => 'Ibu',
        ],[
            'nik' => '3574040605980001',
            'nama' => 'Frisaranda Dewa Sukarno',
            'tanggal_lahir' => '1998-05-06',
            'gender' => 'Laki-laki',
            'hubungan' => 'Kakak laki-laki',
        ],[
            'nik' => '3574041906050001',
            'nama' => 'Frisaranda Devita Maharani',
            'tanggal_lahir' => '2005-06-19',
            'gender' => 'Perempuan',
            'hubungan' => 'Adik perempuan',
        ]]);
    }
}

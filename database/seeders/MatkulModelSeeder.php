<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatkulModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matkul_models')->insert([[
            'kode_mk' => 'TI401',
            'nama' => 'Analisis dan Desain Berorentasi Objek',
            'semester' => '4',
            'sks' => '2',
            'jam' => '4',
        ],[
            'kode_mk' => 'TI402',
            'nama' => 'Business Intelligence',
            'semester' => '4',
            'sks' => '2',
            'jam' => '4',
        ],[
            'kode_mk' => 'TI403',
            'nama' => 'Jaringan Komputer',
            'semester' => '4',
            'sks' => '2',
            'jam' => '4',
        ],[
            'kode_mk' => 'TI404',
            'nama' => 'Kewarganegaraan',
            'semester' => '4',
            'sks' => '2',
            'jam' => '2',
        ],[
            'kode_mk' => 'TI405',
            'nama' => 'Manajemen Proyek',
            'semester' => '4',
            'sks' => '2',
            'jam' => '3',
        ],[
            'kode_mk' => 'TI406',
            'nama' => 'Pemrograman Web Lanjut',
            'semester' => '4',
            'sks' => '3',
            'jam' => '6',
        ],[
            'kode_mk' => 'TI407',
            'nama' => 'Praktikum Jaringan Komputer',
            'semester' => '4',
            'sks' => '2',
            'jam' => '4',
        ],[
            'kode_mk' => 'TI408',
            'nama' => 'Proyek 1',
            'semester' => '4',
            'sks' => '3',
            'jam' => '6',
        ],[
            'kode_mk' => 'TI409',
            'nama' => 'Statistik Komputasi',
            'semester' => '4',
            'sks' => '2',
            'jam' => '4',
        ]]);
    }
}

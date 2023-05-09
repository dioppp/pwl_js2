<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaMatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mahamatkul = [
            [
                'mahasiswa_id' => '1',
                'matakuliah_id' => 'TI402',
                'nilai' => '90',
            ],[
                'mahasiswa_id' => '1',
                'matakuliah_id' => 'TI409',
                'nilai' => '95',
            ],[
                'mahasiswa_id' => '7',
                'matakuliah_id' => 'TI406',
                'nilai' => '85',
            ],[
                'mahasiswa_id' => '7',
                'matakuliah_id' => 'TI408',
                'nilai' => '80',
            ],[
                'mahasiswa_id' => '8',
                'matakuliah_id' => 'TI405',
                'nilai' => '95',
            ],[
                'mahasiswa_id' => '8',
                'matakuliah_id' => 'TI402',
                'nilai' => '95',
            ],];

        DB::table('mahasiswa__matakuliahs')->insert($mahamatkul);
    }
}

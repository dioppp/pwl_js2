<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article_models')->insert([[
            'id' => 'N01',
            'judul' => 'Ekspresi Marah David Setelah Sadar dari Koma, Sang Ayah Peringatkan Mario Dandy Cs Akan Susah Tidur',
            'penulis' => 'Sarah Elnyora',
            'tanggal_publish' => '2023-03-07',
        ],[
            'id' => 'L01',
            'judul' => 'Para Ilmuwan Temukan Dunia Hilang yang Ternyata Ada di Indonesia, Ini Lokasinya!',
            'penulis' => 'Rini Apriliani',
            'tanggal_publish' => '2023-03-08',
        ],[
            'id' => 'S01',
            'judul' => 'Usai Dibantai Liverpool, Manchester United Seharusnya Sadar Diri',
            'penulis' => 'Khasan Rochmad',
            'tanggal_publish' => '2023-03-07',
        ],[
            'id' => 'S02',
            'judul' => 'Pelatih Uzbekistan U-20: Lepas Tembakan Jarak Jauh Saja Sulit!',
            'penulis' => 'Donny Afroni',
            'tanggal_publish' => '2023-03-08',
        ],[
            'id' => 'E01',
            'judul' => 'Nah Lho! Erick Thohir Copot Direktur Pertamina',
            'penulis' => 'Husen Miftahudin',
            'tanggal_publish' => '2023-03-08',
        ]]);
    }
}

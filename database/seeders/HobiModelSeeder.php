<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HobiModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hobi_models')->insert([[
            'id' => '001',
            'nama_hobi' => 'makan',
        ],[
            'id' => '002',
            'nama_hobi' => 'menonton film',
        ],[
            'id' => '003',
            'nama_hobi' => 'bermain game',
        ]]);
    }
}

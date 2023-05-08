<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa__matakuliahs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mahasiswa_id');
            $table->string('matakuliah_id');
            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswas');
            $table->foreign('matakuliah_id')->references('kode_mk')->on('matkul_models');
            $table->string('nilai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mahasiswas', function (Blueprint $table){
            $table->dropForeign(['mahasiswa_id']);
            $table->dropForeign(['matakuliah_id']);
            $table->string('matkul_models');
        });
    }
};

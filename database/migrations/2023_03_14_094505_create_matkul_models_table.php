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
        Schema::create('matkul_models', function (Blueprint $table) {
            $table->string('kode_mk', 5)->primary();
            $table->string('nama', 100);
            $table->integer('semester');
            $table->integer('sks');
            $table->integer('jam');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matkul_models');
    }
};

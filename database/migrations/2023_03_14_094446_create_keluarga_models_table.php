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
        Schema::create('keluarga_models', function (Blueprint $table) {
            $table->string('nik', 16)->primary();
            $table->string('nama', 100);
            $table->date('tanggal_lahir');
            $table->string('gender', 10);
            $table->string('hubungan', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keluarga_models');
    }
};

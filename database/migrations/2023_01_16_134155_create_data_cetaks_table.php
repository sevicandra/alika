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
        Schema::create('data_cetak', function (Blueprint $table) {
            $table->id();
            $table->string('tahun', 4)->nullable();
            $table->string('nip_asal', 18)->nullable();
            $table->string('nip_tujuan', 18)->nullable();
            $table->string('nama_tujuan', 128)->nullable();
            $table->string('jenis')->nullable();
            $table->string('nomor')->nullable();
            $table->integer('tanggal', 11)->nullable();
            $table->string('tujuan')->nullable();
            $table->string('perihal')->nullable();
            $table->string('file')->nullable();
            $table->string('date', 64)->nullable();
            $table->string('id_dokumen', 64)->nullable();
            $table->integer('status', 11)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_cetak');
    }
};

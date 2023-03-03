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
        Schema::create('data_hukdis', function (Blueprint $table) {
            $table->id();
            $table->string('bulan', 2);
            $table->string('tahun', 4);
            $table->string('nip', 18);
            $table->string('no_sk', 128);
            $table->integer('tgl_sk');
            $table->integer('tgl_mulai');
            $table->integer('tgl_selesai');
            $table->string('uraian', 255);
            $table->string('penerbit', 128);
            $table->integer('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_hukdis');
    }
};

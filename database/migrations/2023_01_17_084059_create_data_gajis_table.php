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
        Schema::create('data_gaji', function (Blueprint $table) {
            $table->id();
            $table->string('kdjns', 1)->nullable();
            $table->integer('kdsatker', 6)->nullable();
            $table->string('kdanak', 2)->nullable();
            $table->string('kdsubanak', 2)->nullable();
            $table->string('kdkawin', 4)->nullable();
            $table->string('kdgapok', 4)->nullable();
            $table->string('kdjab', 5)->nullable();
            $table->string('bulan', 2)->nullable();
            $table->string('tahun', 4)->nullable();
            $table->string('nip', 18)->nullable();
            $table->double('gapok', 12,0)->nullable();
            $table->double('tistri', 12,0)->nullable();
            $table->double('tanak', 12,0)->nullable();
            $table->double('tumum', 12,0)->nullable();
            $table->double('ttambumum', 12,0)->nullable();
            $table->double('tstruktur', 12,0)->nullable();
            $table->double('tfungsi', 12,0)->nullable();
            $table->double('bulat', 12,0)->nullable();
            $table->double('tberas', 12,0)->nullable();
            $table->double('tpajak', 12,0)->nullable();
            $table->double('pberas', 12,0)->nullable();
            $table->double('tpapua', 12,0)->nullable();
            $table->double('tpencil', 12,0)->nullable();
            $table->double('tlain', 12,0)->nullable();
            $table->double('iwp', 12,0)->nullable();
            $table->double('pph', 12,0)->nullable();
            $table->double('sewarmh', 12,0)->nullable();
            $table->double('tunggakan', 12,0)->nullable();
            $table->double('utanglebih', 12,0)->nullable();
            $table->double('potlain', 12,0)->nullable();
            $table->double('taperum', 12,0)->nullable();
            $table->double('bpjs', 12,0)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_gaji');
    }
};

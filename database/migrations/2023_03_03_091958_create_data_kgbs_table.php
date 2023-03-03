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
        Schema::create('data_kgbs', function (Blueprint $table) {
            $table->id();
            $table->string('bulan', 2);
            $table->string('tahun', 4);
            $table->string('nip', 18);
            $table->string('kdgol', 2);
            $table->string('jabatan', 128);
            $table->integer('gapok_baru');
            $table->string('mkt_baru', 2);
            $table->string('mkt_baru', 2);
            $table->string('mkb_baru', 2);
            $table->string('kdgol_baru', 2);
            $table->integer('tmt_baru');
            $table->string('no_kgb_baru', 128);
            $table->integer('tgl_kgb_baru');
            $table->string('penerbit_baru');
            $table->integer('gapok_lama');
            $table->string('mkt_lama', 2);
            $table->string('mkt_lama', 2);
            $table->string('mkb_lama', 2);
            $table->string('kdgol_lama', 2);
            $table->integer('tmt_lama');
            $table->string('no_kgb_lama', 128);
            $table->integer('tgl_kgb_lama');
            $table->string('penerbit_lama');
            $table->integer('status')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_kgbs');
    }
};

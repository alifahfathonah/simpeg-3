<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKunjunganPasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kunjungan_pasiens', function (Blueprint $table) {
            $table->increments('id_kunjungan_pasien');
            $table->date('tanggal');
            $table->integer('id_dokter');
            $table->integer('id_registrasi');
            $table->string('kode_diagnosa',6);
            $table->string('keterangan',30);
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
        Schema::dropIfExists('kunjungan_pasiens');
    }
}

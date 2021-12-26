<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->increments('kartu_berobat');
            $table->string('nama_pasien',50);
            $table->date('tanggal_lahir_pasien');
            $table->text('alamat_pasien');
            $table->string('no_hp_pasien',12);
            $table->string('status_peserta',20);
            $table->string('no_kartu_kesehatan',13);
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
        Schema::dropIfExists('pasiens');
    }
}

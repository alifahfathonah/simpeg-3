<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengadaanObatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengadaan_obats', function (Blueprint $table) {
            $table->increments('id_pengadaan_obat');
            $table->string('id_obat',10);
            $table->date('tanggal');
            $table->integer('jumlah');
            $table->string('asal_obat',50);
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
        Schema::dropIfExists('pengadaan_obats');
    }
}

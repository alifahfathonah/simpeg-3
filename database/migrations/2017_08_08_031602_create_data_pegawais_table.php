<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataPegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pegawais', function (Blueprint $table) {
            $table->increments('id_data_pegawai');
            $table->string('nama_pegawai',60);
            $table->string('tempat_lahir',60);
            $table->date('tgl_lahir');
            $table->string('pendidikan_terakhir',30);
            $table->integer('id_jabatan');
            $table->integer('id_pangkat');
            $table->string('tempat_tugas',60);
            $table->date('tmt_tugas');
            $table->date('no_surat_tugas');
            $table->integer('status_pegawai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_pegawais');
    }
}
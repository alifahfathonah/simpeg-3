<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataObatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_obats', function (Blueprint $table) {
            $table->string('id_obat',10);
            $table->string('nama_obat',50);
            $table->string('kategori_obat',20);
            $table->integer('harga_jual');
            $table->integer('stok_minimal');
            $table->integer('stok');
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
        Schema::dropIfExists('data_obats');
    }
}

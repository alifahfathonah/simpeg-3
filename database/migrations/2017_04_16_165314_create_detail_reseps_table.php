<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailResepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_reseps', function (Blueprint $table) {
            $table->increments('id_detail_resep');
            $table->integer('no_resep');
            $table->integer('id_obat');
            $table->integer('qty');
            $table->string('dosis',20);
            $table->string('keterangan',20);
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
        Schema::dropIfExists('detail_reseps');
    }
}

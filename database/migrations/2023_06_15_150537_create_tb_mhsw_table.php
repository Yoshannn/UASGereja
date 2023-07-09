<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbMhswTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_jemaat', function (Blueprint $table) {
            $table->increments('jemaat_id');
            $table->string('jemaat_kode');
            $table->string('jemaat_nama');
            $table->string('jemaat_status');
            $table->string('jemaat_alamat');
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
        Schema::dropIfExists('tb_jemaat');
    }
}

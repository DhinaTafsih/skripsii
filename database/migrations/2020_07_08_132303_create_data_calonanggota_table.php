<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataCalonanggotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_calonanggota', function (Blueprint $table) {
            $table->integer('nim');
            $table->string('nama_calonanggota');
            $table->string('jurusan');
            $table->string('email_calonanggota')->unique;
            $table->char('nomor_telp',13);
            $table->integer('id_nilai')->unsigned();
            $table->foreign('id_nilai')->references('id_nilai')->on('nilai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_calonanggota');
    }
}

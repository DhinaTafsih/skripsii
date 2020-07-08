<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeptKeanggotaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dept_keanggotaan', function (Blueprint $table) {
            $table->increments('id_anggota');
            $table->string('nama_anggota');
            $table->string('NRA_anggota');
            $table->string('email_anggota')->unique;
            $table->char('nomor_telp',13);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dept_keanggotaan');
    }
}

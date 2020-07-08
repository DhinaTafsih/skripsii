<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai', function (Blueprint $table) {
            $table->increments('id_nilai');
            $table->float('jumlah nilai');
            $table->text('keterangan');
            $table->integer('id_anggota')->unsigned();
            $table->integer('id_subkriteria')->unsigned();
            $table->foreign('id_anggota')->references('id_anggota')->on('dept_keanggotaan');
            $table->foreign('id_subkriteria')->references('id_subkriteria')->on('sub_kriteria');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilai');
    }
}

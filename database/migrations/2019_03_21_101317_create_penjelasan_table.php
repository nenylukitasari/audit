<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenjelasanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjelasan', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('version_id')->unsigned();
            $table->foreign('version_id')->references('id')->on('version');
            $table->integer('kegiatan_id')->unsigned()->nullable();
            $table->foreign('kegiatan_id')->references('id')->on('kegiatan');
            $table->integer('kategori_id')->unsigned()->nullable();
            $table->foreign('kategori_id')->references('id')->on('kategori');
            $table->text('penjelasan');
            $table->integer('kode_tabel');
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
        Schema::dropIfExists('penjelasan');
    }
}

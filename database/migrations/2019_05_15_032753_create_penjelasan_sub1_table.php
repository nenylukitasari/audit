<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenjelasanSub1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjelasan_sub1', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('penjelasan_id')->unsigned();
            $table->foreign('penjelasan_id')->references('id')->on('penjelasan');
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
        Schema::dropIfExists('penjelasan_sub1');
    }
}

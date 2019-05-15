<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenjelasanSub2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjelasan_sub2', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('penjelasan_sub1_id')->unsigned();
            $table->foreign('penjelasan_sub1_id')->references('id')->on('penjelasan_sub1');
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
        Schema::dropIfExists('penjelasan_sub2');
    }
}

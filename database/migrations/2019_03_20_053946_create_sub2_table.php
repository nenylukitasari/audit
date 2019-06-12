<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSub2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub2', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('sub1_id')->unsigned();
            $table->foreign('sub1_id')->references('id')->on('sub1');
            $table->text('uraian_kegiatan');
            $table->string('satuan')->nullable();
            $table->string('keterangan')->nullable();
            $table->integer('var1');
            $table->integer('var2')->nullable();
            $table->integer('var3')->nullable();
            $table->integer('var4')->nullable();
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
        Schema::dropIfExists('sub2');
    }
}

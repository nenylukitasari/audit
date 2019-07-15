<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSub1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub1', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('uraian_id')->unsigned();
            $table->foreign('uraian_id')->references('id')->on('uraian');
            $table->text('uraian_kegiatan');
            $table->string('satuan')->nullable();
            $table->string('keterangan')->nullable();
            $table->integer('var1')->nullable();
            $table->integer('var2')->nullable();
            $table->integer('var3')->nullable();
            $table->integer('var4')->nullable();
            $table->integer('kode_tabel');
            $table->softDeletes();
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
        Schema::dropIfExists('sub1');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMakanLemburTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('makan_lembur', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('kategori_makan_id')->unsigned();
            $table->foreign('kategori_makan_id')->references('kategori_makan_id')->on('kategori_makan');
            $table->text('uraian_kegiatan');
            $table->string('satuan')->nullable();
            $table->integer('bruto')->nullable();
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
        Schema::dropIfExists('makan_lembur');
    }
}

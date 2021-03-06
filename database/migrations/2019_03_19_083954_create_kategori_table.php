<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKategoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('kegiatan_id')->unsigned();
            $table->foreign('kegiatan_id')->references('id')->on('kegiatan');
            $table->text('kategori_kegiatan');
            $table->string('satuan')->nullable();
            $table->integer('var1')->nullable();
            $table->integer('kode_tabel');
            $table->integer('kode_bagian')->nullable();
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
        Schema::dropIfExists('kategori');
    }
}

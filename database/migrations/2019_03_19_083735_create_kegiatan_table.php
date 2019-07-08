<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKegiatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('jenis_kegiatan_id')->unsigned();
            $table->foreign('jenis_kegiatan_id')->references('id')->on('jenis_kegiatan');
            $table->text('nama_kegiatan');
            $table->integer('kode_tabel');
            $table->integer('kode_bagian')->nullable();
            $table->softDeletes();
            $table->timestamps();
            // $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kegiatan');
    }
}

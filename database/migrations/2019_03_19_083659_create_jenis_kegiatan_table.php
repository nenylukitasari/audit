<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJenisKegiatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_kegiatan', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('version_id')->unsigned();
            $table->foreign('version_id')->references('id')->on('version');
            $table->text('jenis_kegiatan');
            $table->integer('kode_tabel');
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
        Schema::dropIfExists('jenis_kegiatan');
    }
}

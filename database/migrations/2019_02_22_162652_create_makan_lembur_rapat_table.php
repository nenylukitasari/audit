<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMakanLemburRapatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('makan_lembur_rapat', function (Blueprint $table) {
            $table->increments('id');
            $table->text('kategori_kegiatan');
            $table->text('uraian_kegiatan');
            $table->string('satuan');
            $table->integer('bruto');
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
        Schema::dropIfExists('makan_lembur_rapat');
    }
}

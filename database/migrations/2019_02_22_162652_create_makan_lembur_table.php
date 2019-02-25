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
            $table->increments('id_makan_lembur');
            $table->integer('id_kategori_makan');
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

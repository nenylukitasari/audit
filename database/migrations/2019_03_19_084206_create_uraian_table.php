<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUraianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uraian', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('kategori_id')->unsigned();
            $table->foreign('kategori_id')->references('id')->on('kategori');
            $table->integer('provinsi_id')->unsigned()->nullable();
            $table->foreign('provinsi_id')->references('id')->on('provinsi');
            $table->text('uraian_kegiatan');
            $table->string('satuan')->nullable();
            $table->integer('var1');
            $table->integer('var2')->nullable();
            $table->integer('var3')->nullable();
            $table->integer('var4')->nullable();
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
        Schema::dropIfExists('uraian');
    }
}

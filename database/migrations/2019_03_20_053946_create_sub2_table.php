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
            $table->string('satuan');
            $table->integer('var1');
            $table->integer('var2');
            $table->integer('var3');
            $table->integer('var4');
            $table->string('version');
            $table->boolean('status');
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

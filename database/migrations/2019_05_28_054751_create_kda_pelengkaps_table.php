<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKdaPelengkapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kda_pelengkap', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kda_id');
            $table->string('kelengkapan');
            $table->string('kesediaan')->nullable();
            $table->string('jumlah')->nullable();
            $table->string('nominal')->nullable();
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
        Schema::dropIfExists('kda_pelengkap');
    }
}

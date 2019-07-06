<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeraturanLainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peraturan_lain', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('version_id')->unsigned();
            $table->foreign('version_id')->references('id')->on('version');
            $table->text('nama_peraturan');
            $table->text('link_keterangan');
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
        Schema::dropIfExists('peraturan_lain');
    }
}

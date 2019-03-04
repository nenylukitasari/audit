<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiayaKonsumsiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('biaya_konsumsi', function (Blueprint $table) {
            $table->increments('biaya_konsumsi_id')->unsigned();
            $table->integer('makan_lembur_id')->unsigned();
            $table->foreign('makan_lembur_id')->references('makan_lembur_id')
            ->on('makan_lembur');
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
        Schema::dropIfExists('biaya_konsumsi');
    }
}

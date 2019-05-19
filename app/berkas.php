<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class berkas extends Model
{
   public $table = "berkas";
   public $fillable = ['id','kegiatan_id', 'berkas'];

   public function kegiatan(){
    	return $this->belongsTo(Kegiatan::class,'kegiatan_id','id');
    }
}

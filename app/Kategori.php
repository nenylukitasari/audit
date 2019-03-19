<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $primaryKey = 'id';

    public function kegiatan(){
    	return $this->belongsTo(Kegiatan::class,'kegiatan_id','id');
    }
    public function uraian()
    {
    	return $this->hasMany(Uraian::class,'kategori_id','id');
    }
    public function sub1()
    {
    	return $this->hasManyThrough('App\Sub1','App\Uraian');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uraian extends Model
{
    protected $table = 'uraian';
    protected $primaryKey = 'id';

    public function kategori(){
    	return $this->belongsTo(Kategori::class,'kategori_id','id');
    }
    public function sub1()
    {
    	return $this->hasMany(Sub1::class,'uraian_id','id');
    }
    public function sub2()
    {
        return $this->hasManyThrough('App\Sub2','App\Sub1');
    }

    
    public function provinsi()
    {
    	return $this->belongsTo(Provinsi::class,'provinsi_id','id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjelasan extends Model
{
    protected $table = 'penjelasan';
    protected $primaryKey = 'id';

    public function version(){
    	return $this->belongsTo(Version::class,'version_id','id');
    }
    public function kegiatan(){
    	return $this->belongsTo(Kegiatan::class,'kegiatan_id','id');
    }
    public function kategori(){
    	return $this->belongsTo(Kategori::class,'kategori_id','id');
    }

    public function penjelasan_sub1()
    {
        return $this->hasMany(PenjelasanSub1::class,'penjelasan_id','id');
    }
    public function penjelasan_sub2()
    {
        return $this->hasManyThrough('App\PenjelasanSub2','App\PenjelasanSub1');
    }

}

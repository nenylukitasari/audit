<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kegiatan extends Model
{
    protected $table = 'kegiatan';
    protected $primaryKey = 'id';
    // use SoftDeletes;
    // protected $dates =['deleted_at'];
    

    public function jenis_kegiatan()
    {
    	return $this->belongsTo(JenisKegiatan::class,'jenis_kegiatan_id','id');
    }
    public function kategori()
    {
    	return $this->hasMany(Kategori::class,'kegiatan_id','id');
    }
    public function uraian()
    {
    	return $this->hasManyThrough(Uraian::class,Kategori::class);
    }

    public function penjelasan()
    {
        return $this->hasMany(Penjelasan::class,'kegiatan_id','id');
    }
    public function penjelasan_sub1()
    {
        return $this->hasManyThrough('App\PenjelasanSub1','App\Penjelasan');
    }
}

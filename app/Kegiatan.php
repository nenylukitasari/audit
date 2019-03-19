<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'kegiatan';
    protected $primaryKey = 'id';

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
    	return $this->hasManyThrough('App\Uraian','App\Kategori');
    }
}

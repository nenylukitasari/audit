<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriKegiatan extends Model
{
    protected $table = 'kategori_kegiatan';
    protected $primaryKey = 'id';
    
    public function kegiatan()
    {
    	return $this->hasMany(Kegiatan::class,'kategori_kegiatan_id','id');
    }
}

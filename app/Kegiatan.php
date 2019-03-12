<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'kegiatan';
    protected $primaryKey = 'id';

    public function kategori_kegiatan()	
    {
    	return $this->belongsTo(KategoriKegiatan::class,'kategori_kegiatan_id','id');
    }
}

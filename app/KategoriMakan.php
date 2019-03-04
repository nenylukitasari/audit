<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriMakan extends Model
{
    protected $table = 'kategori_makan';
    protected $primaryKey = 'kategori_makan_id';
    
    public function makan_lembur()
    {
    	return $this->hasMany(MakanLembur::class);
    }
}	
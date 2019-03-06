<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriMakan extends Model
{
    protected $table = 'kategori_makan';
    protected $primaryKey = 'id';
    
    public function makan_lembur()
    {
    	return $this->hasMany(MakanLembur::class,'kategori_makan_id','id');
    }

    public function makan_lembur_biaya_konsumsi()
    {
    	return $this->hasManyThrough(
             BiayaKonsumsi::class, MakanLembur::class
        );
    }
}	
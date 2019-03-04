<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MakanLembur extends Model
{
    protected $table = 'makan_lembur';
    protected $primaryKey = 'makan_lembur_id';
    
 	public function kategori_makan()	
    {
    	return $this->belongsTo(KategoriMakan::class,'kategori_makan_id');
    }

    public function biaya_konsumsi()
    {
    	return $this->hasMany(BiayaKonsumsi::class);
    }
    
}

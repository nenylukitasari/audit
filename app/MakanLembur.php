<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MakanLembur extends Model
{
    protected $table = 'makan_lembur';
    protected $primaryKey = 'id';
    protected $fillable = ['kategori_makan','uraian_kegiatan', 'satuan', 'bruto'];
    
 	public function kategori_makan()	
    {
    	return $this->belongsTo(KategoriMakan::class,'kategori_makan_id','id');
    }

    public function biaya_konsumsi()
    {
    	return $this->hasMany(BiayaKonsumsi::class,'makan_lembur_id','id');
    }
}

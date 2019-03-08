<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MakanLembur extends Model
{
    protected $table = 'makan_lembur';
    protected $primaryKey = 'id';
    protected $fillable = ['uraian_kegiatan', 'satuan', 'bruto','luar_kota','diklat','A','B','C','D'];
    
 	public function kategori_makan()	
    {
    	return $this->belongsTo(KategoriMakan::class,'kategori_makan_id','id');
    }

    public function biaya_konsumsi()
    {
    	return $this->hasMany(BiayaKonsumsi::class,'makan_lembur_id','id');
    }

    public static function getExcerpt($str, $startPos = 0, $maxLength = 50) {
		if(strlen($str) > $maxLength) {
			$excerpt   = substr($str, $startPos, $maxLength - 6);
			$lastSpace = strrpos($excerpt, ' ');
			$excerpt   = substr($excerpt, 0, $lastSpace);
			$excerpt  .= ' [...]';
		} else {
			$excerpt = $str;
		}
		
		return $excerpt;
	}
    
}

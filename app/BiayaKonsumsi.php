<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BiayaKonsumsi extends Model
{
    protected $table = 'biaya_konsumsi';
    protected $primaryKey = 'biaya_konsumsi_id';
    
 	public function makan_lembur()	
    {
    	return $this->belongsTo(MakanLembur::class,'makan_lembur_id');
    }
    
}

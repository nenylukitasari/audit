<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MakanLembur extends Model
{
    protected $table = 'makan_lembur';

 	public function kategori_makan()
    {
    	return $this->belongsTo('App\KategoriMakan');
    }
    
}

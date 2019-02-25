<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriMakan extends Model
{
    protected $table = 'kategori_makan';

    public function makan_lembur()
    {
    	return $this->hasMany('App\MakanLembur');
    }
}	
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
	protected $table = 'provinsi';
    protected $primaryKey = 'id';

    public function uraian()
    {
    	return $this->hasMany(Uraian::class,'provinsi_id','id');
    }
    public function sub1()
    {
    	return $this->hasManyThrough('App\Sub1','App\Uraian');
    }
}

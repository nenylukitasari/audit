<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub1 extends Model
{
    protected $table = 'sub1';
    protected $primaryKey = 'id';

    public function uraian(){
    	return $this->belongsTo(Uraian::class,'uraian_id','id');
    }
    public function sub2()
    {
        return $this->hasMany(Sub2::class,'sub1_id','id');
    }
}

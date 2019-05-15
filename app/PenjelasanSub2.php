<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenjelasanSub2 extends Model
{
    protected $table = 'penjelasan_sub2';
    protected $primaryKey = 'id';

    public function penjelasan_sub1(){
    	return $this->belongsTo(PenjelasanSub1::class,'penjelasan_sub1_id','id');
    }
}

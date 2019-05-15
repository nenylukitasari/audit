<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenjelasanSub1 extends Model
{
    protected $table = 'penjelasan_sub1';
    protected $primaryKey = 'id';

    public function penjelasan(){
    	return $this->belongsTo(Penjelasan::class,'penjelasan_id','id');
    }
    public function penjelasan_sub2()
    {
        return $this->hasMany(PenjelasanSub2::class,'penjelasan_sub1_id','id');
    }
}

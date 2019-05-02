<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub2 extends Model
{
    protected $table = 'sub2';
    protected $primaryKey = 'id';

    // use \Znck\Eloquent\Traits\BelongsToThrough;

    public function sub1(){
    	return $this->belongsTo(Sub1::class,'sub1_id','id');
    }

    // public function jenis_kegiatan()
    // {
    // 	return $this->belongsToThrough(
    //         'App\JenisKegiatan',
    //         ['App\Kegiatan', 'App\Kategori', 'App\Uraian', 'App\Sub1']
    //     );
    // }
}

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
    // public function jenis_kegiatan()
    // {
    // 	return $this->belongsToThrough(
    //         'App\JenisKegiatan',
    //         ['App\Kegiatan', 'App\Kategori', 'App\Uraian']
    //     );
    // }
}

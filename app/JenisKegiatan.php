<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisKegiatan extends Model
{
	// use \Staudenmeir\EloquentHasManyDeep\HasRelationships;

    protected $table = 'jenis_kegiatan';
    protected $primaryKey = 'id';

    // public function sub1(){
    // 	return $this->hasManyDeep(
    //         'App\Sub1',
    //         ['App\Kegiatan', 'App\Kategori', 'App\Uraian'], 
    //         [
    //            'jenis_kegiatan_id', 
    //            'kegiatan_id',  
    //            'kategori_id',
    //            'uraian_id'     
    //         ],
    //         [
    //           'id', 
    //           'id', 
    //           'id'  
    //         ]
    //     );
    // }

    public function kegiatan()
    {
    	return $this->hasMany(Kegiatan::class,'jenis_kegiatan_id','id');
    }
    public function kategori()
    {
    	return $this->hasManyThrough('App\Kategori','App\Kegiatan');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JenisKegiatan extends Model
{
	// use \Staudenmeir\EloquentHasManyDeep\HasRelationships;

    protected $table = 'jenis_kegiatan';
    protected $primaryKey = 'id';
    // use SoftDeletes;
    // protected $dates =['deleted_at'];

    // public function sub2(){
    //         return $this->hasManyDeep('App\Sub2', ['App\Kegiatan', 'App\Kategori', 'App\Uraian', 'App\Sub1']);

        //     'App\Sub1',
        //     ['App\Kegiatan', 'App\Kategori', 'App\Uraian'], 
        //     [
        //        'jenis_kegiatan_id', 
        //        'kegiatan_id',  
        //        'kategori_id',
        //        'uraian_id'     
        //     ],
        //     [
        //       'id', 
        //       'id', 
        //       'id'  
        //     ]
        // );
    // }

    public function kegiatan()
    {
    	return $this->hasMany(Kegiatan::class,'jenis_kegiatan_id','id');
    }
    public function kategori()
    {
        return $this->hasManyThrough('App\Kategori','App\Kegiatan');
    }

    // public function all()
    // {
    //     return $this->hasManyThrough('App\Kategori','App\Kegiatan');
    // }

}
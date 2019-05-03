<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    protected $table = 'version';
    protected $primaryKey = 'id';
    
    public function jenis_kegiatan()
    {
    	return $this->hasMany(JenisKegiatan::class,'version_id','id');
    }
    public function kegiatan()
    {
        return $this->hasManyThrough('App\Kegiatan','App\JenisKegiatan');
    }
}

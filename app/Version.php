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

    public function provinsi()
    {
        return $this->hasMany(Provinsi::class,'version_id','id');
    }
    public function uraian()
    {
        return $this->hasManyThrough('App\Uraian','App\Provinsi');
    }
    public function penjelasan()
    {
        return $this->hasMany(Penjelasan::class,'version_id','id');
    }
}

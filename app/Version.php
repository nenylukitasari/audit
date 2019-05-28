<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\SearchResult;
use Spatie\Searchable\Searchable;

class Version extends Model implements Searchable
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
    public function getSearchResult(): SearchResult
    {
        // $url = url('/data/'.$this->kode_tabel . '/' .$this->kode_bagian );

        return new SearchResult(
            $this,
            $this->status
            // $url
         );
    }
}

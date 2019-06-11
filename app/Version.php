<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\SearchResult;
use Spatie\Searchable\Searchable;
// use Nicolaslopezj\Searchable\SearchableTrait;
// use Sofa\Eloquence\Eloquence;

class Version extends Model implements Searchable
{
    // use SearchableTrait;
    // use Eloquence;

    //  protected $searchable = [
    //     // *
    //      // * Columns and their priority in search results.
    //      // * Columns with higher values are more important.
    //      // * Columns with equal values have equal importance.
    //      // *
    //      // * @var array
         
    //     'columns' => [
    //         'version.version' => 10,
    //         'jenis_kegiatan.jenis_kegiatan' => 10,
    //     ],
    //     'joins' => [
    //         'jenis_kegiatan' => ['version.id','jenis_kegiatan.version_id'],
    //         'kegiatan' => ['jenis_kegiatan.id','kegiatan.jenis_kegiatan_id'],
    //     ],
    // ];

    


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
    public function peraturan_lain()
    {
        return $this->hasMany(PeraturanLain::class,'version_id','id');
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

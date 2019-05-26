<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Kategori extends Model implements Searchable
{
    protected $table = 'kategori';
    protected $primaryKey = 'id';

    public function kegiatan(){
    	return $this->belongsTo(Kegiatan::class,'kegiatan_id','id');
    }
    public function uraian()
    {
    	return $this->hasMany(Uraian::class,'kategori_id','id');
    }
    public function sub1()
    {
    	return $this->hasManyThrough('App\Sub1','App\Uraian');
    }

    public function penjelasan()
    {
        return $this->hasMany(Penjelasan::class,'kategori_id','id');
    }
    public function penjelasan_sub1()
    {
        return $this->hasManyThrough('App\PenjelasanSub1','App\Penjelasan');
    }

    public function getSearchResult(): SearchResult
    {
        // $url = route('categories.show', $this->id);

        return new SearchResult(
            $this,
            $this->kategori_kegiatan
            // $url
         );
    }
}

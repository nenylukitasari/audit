<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
// use Spatie\Searchable\Searchable;
// use Spatie\Searchable\SearchResult;

class Penjelasan extends Model /*implements Searchable*/
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'penjelasan';
    protected $primaryKey = 'id';

    public function version(){
    	return $this->belongsTo(Version::class,'version_id','id');
    }
    public function kegiatan(){
    	return $this->belongsTo(Kegiatan::class,'kegiatan_id','id');
    }
    public function kategori(){
    	return $this->belongsTo(Kategori::class,'kategori_id','id');
    }

    public function penjelasan_sub1()
    {
        return $this->hasMany(PenjelasanSub1::class,'penjelasan_id','id');
    }
    public function penjelasan_sub2()
    {
        return $this->hasManyThrough('App\PenjelasanSub2','App\PenjelasanSub1');
    }
    // public function getSearchResult(): SearchResult
    // {
    //     // $url = route('categories.show', $this->id);

    //     return new SearchResult(
    //         $this,
    //         $this->penjelasan
    //         // $url
    //      );
    // }

}

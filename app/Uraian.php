<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
// use Spatie\Searchable\Searchable;
// use Spatie\Searchable\SearchResult;

class Uraian extends Model /*implements Searchable*/
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'uraian';
    protected $primaryKey = 'id';

    public function kategori(){
    	return $this->belongsTo(Kategori::class,'kategori_id','id');
    }
    public function sub1()
    {
    	return $this->hasMany(Sub1::class,'uraian_id','id');
    }
    public function sub2()
    {
        return $this->hasManyThrough('App\Sub2','App\Sub1');
    }

    // public function getSearchResult(): SearchResult
    // {
    //     // $url = route('categories.show', $this->id);

    //     return new SearchResult(
    //         $this,
    //         $this->uraian_kegiatan
    //         // $url
    //      );
    // }

}

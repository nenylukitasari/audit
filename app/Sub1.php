<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
// use Spatie\Searchable\Searchable;
// use Spatie\Searchable\SearchResult;

class Sub1 extends Model /*implements Searchable*/
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'sub1';
    protected $primaryKey = 'id';

    public function uraian(){
    	return $this->belongsTo(Uraian::class,'uraian_id','id');
    }
    public function sub2()
    {
        return $this->hasMany(Sub2::class,'sub1_id','id');
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

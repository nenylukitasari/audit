<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
// use Spatie\Searchable\Searchable;
// use Spatie\Searchable\SearchResult;

class PenjelasanSub1 extends Model /*implements Searchable*/
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'penjelasan_sub1';
    protected $primaryKey = 'id';

    public function penjelasan(){
    	return $this->belongsTo(Penjelasan::class,'penjelasan_id','id');
    }
    public function penjelasan_sub2()
    {
        return $this->hasMany(PenjelasanSub2::class,'penjelasan_sub1_id','id');
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

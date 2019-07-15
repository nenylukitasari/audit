<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
// use Spatie\Searchable\Searchable;
// use Spatie\Searchable\SearchResult;

class Sub2 extends Model/* implements Searchable*/
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'sub2';
    protected $primaryKey = 'id';

    // use \Znck\Eloquent\Traits\BelongsToThrough;

    public function sub1(){
    	return $this->belongsTo(Sub1::class,'sub1_id','id');
    }

    // public function jenis_kegiatan()
    // {
    // 	return $this->belongsToThrough(
    //         'App\JenisKegiatan',
    //         ['App\Kegiatan', 'App\Kategori', 'App\Uraian', 'App\Sub1']
    //     );
    // }
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

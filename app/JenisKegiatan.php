<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Spatie\Searchable\Searchable;
// use Spatie\Searchable\SearchResult;

class JenisKegiatan extends Model /*implements Searchable*/
{
	// use \Staudenmeir\EloquentHasManyDeep\HasRelationships;

    protected $table = 'jenis_kegiatan';
    protected $primaryKey = 'id';
    // use SoftDeletes;
    // protected $dates =['deleted_at'];

    // public function sub2(){
    //         return $this->hasManyDeep('App\Sub2', ['App\Kegiatan', 'App\Kategori', 'App\Uraian', 'App\Sub1']);

        //     'App\Sub1',
        //     ['App\Kegiatan', 'App\Kategori', 'App\Uraian'], 
        //     [
        //        'jenis_kegiatan_id', 
        //        'kegiatan_id',  
        //        'kategori_id',
        //        'uraian_id'     
        //     ],
        //     [
        //       'id', 
        //       'id', 
        //       'id'  
        //     ]
        // );
    // }

    public function version()
    {
        return $this->belongsTo(Version::class,'version_id','id');
    }
    public function kegiatan()
    {
    	return $this->hasMany(Kegiatan::class,'jenis_kegiatan_id','id');
    }
    public function kategori()
    {
        return $this->hasManyThrough('App\Kategori','App\Kegiatan');
    }

    // public function all()
    // {
    //     return $this->hasManyThrough('App\Kategori','App\Kegiatan');
    // }

    // public function getSearchResult(): SearchResult
    // {
    //     $url = url('/dokumen');

    //     return new SearchResult(
    //         $this,
    //         $this->jenis_kegiatan,
    //         $url
    //      );
    // }
   
    // public static $searchType = 'JenisKegiatan';
    // public function getResults(string $term): Collection
    // {
    //     return JenisKegiatan::query()
    //         ->where('version_id', 2)
    //         ->where('jenis_kegiatan', 'LIKE', "%{$term}%")
    //         ->get();
    // }

}
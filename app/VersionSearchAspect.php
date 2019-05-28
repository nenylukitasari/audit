<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Search;
use Spatie\Searchable\SearchResult;
use Spatie\Searchable\SearchAspect;
use Illuminate\Support\Collection;
use App\Version;
use App\VersionSearchAspect;
use App\JenisKegiatan;


class VersionSearchAspect extends SearchAspect
{
    public static $searchType = 'Version';

    public function getResults(string $term): Collection
    {
        return Version::query()
        	// ->where('status', 'LIKE', "%{$term}%") // search for $user->email property
            ->where('status', '=', 0) // search for $user->email property
            ->orWhereHas('JenisKegiatan', function($query) use ($term) {
                // and search for $user->userProfile->username property
                $query->where('jenis_kegiatan', 'LIKE', "%{$term}%"); 
            })
            ->get();
    }
}


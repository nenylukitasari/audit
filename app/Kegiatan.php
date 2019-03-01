<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'kegiatan';

    public function jenis_kegiatan()
    {
    	return $this->belongsTo('App\JenisKegiatan');
    }
}

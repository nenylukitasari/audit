<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeraturanLain extends Model
{
    protected $table = 'peraturan_lain';
    protected $primaryKey = 'id';

    public function version()
    {
        return $this->belongsTo(Version::class,'version_id','id');
    }
}

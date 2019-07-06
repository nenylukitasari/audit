<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PeraturanLain extends Model
{
    use SoftDeletes;
    
    protected $table = 'peraturan_lain';
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];

    public function version()
    {
        return $this->belongsTo(Version::class,'version_id','id');
    }
}

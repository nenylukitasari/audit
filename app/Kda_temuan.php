<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kda_temuan extends Model
{
    public $table = "kda_temuan";
    public $fillable = ['id','kwitansi','nominal','keterangan','id_kda','status'];

    public function kda() {
        return $this->belongsTo('App\kda');
    }
}

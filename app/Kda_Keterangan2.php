<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kda_Keterangan2 extends Model
{
    public $table = "kda_keterangan2";
    public $fillable = ['id','kda_id', 'kelengkapan', 'kesediaan', 'jumlah', 'nominal'];
}

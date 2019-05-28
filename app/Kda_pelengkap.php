<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kda_pelengkap extends Model
{
    public $table = "kda_pelengkap";
    public $fillable = ['id','kda_id', 'kelengkapan', 'kesediaan', 'jumlah', 'nominal'];
}

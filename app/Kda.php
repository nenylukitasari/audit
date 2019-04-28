<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class Kda extends Model
{
    protected $table = 'kda';
    //public $primarykey = 'id_kda';
    protected $primaryKey = 'id_kda';

    protected $fillable =[
    'id_kda',
    'unit',
    'masa_audit',
    'bulan_audit',
    'jenis',
    'kode_temuan',
    'created_by',
    ];
}

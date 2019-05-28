<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kda_template extends Model
{
    protected $table = 'kda_template';
    //public $primarykey = 'id_kda';

    protected $fillable =[
    'id','tipe', 'content'];
}

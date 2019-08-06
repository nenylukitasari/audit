<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sumberdana extends Model
{
	 public $table = 'sumberdana';
   protected $primaryKey = 'id';
    public $fillable = ['id','jenis_dana'];
}

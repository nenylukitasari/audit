<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kda_Keterangan extends Model
{
    protected $table = 'kda_keterangan';
    //public $primarykey = 'id_kda';

    protected $fillable =[
    'id','kondisi', 'kesimpulan','saran','rekomendasi','tanggapan','kda_id',];
}

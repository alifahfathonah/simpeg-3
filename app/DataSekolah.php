<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataSekolah extends Model
{
    protected $primaryKey = "id_data_sekolah";
    protected  $fillable = ['nama_sekolah','alamat_sekolah','kota_sekolah'];
    public $timestamps = false;
}

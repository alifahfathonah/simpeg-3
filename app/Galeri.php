<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $primaryKey = "id_galeri";
    protected  $fillable = ['nama_galeri','tgl_upload','file'];
    public $timestamps = false;
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $primaryKey = "id_profil";
    protected  $fillable = ['isi_profil','tgl_profil'];
    public $timestamps = false;
}

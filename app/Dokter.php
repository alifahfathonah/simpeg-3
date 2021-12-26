<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    //
    protected $primaryKey = "id_dokter";
    protected  $fillable = ['nama_dokter','tanggal_lahir','no_hp_dokter','alamat_dokter'];
    public $timestamps = false;

    public function rekammedis(){
        return $this->hasMany('App\RekamMedis');
    }

    public function resep(){
    	return $this->hasMany('App\Resep');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    //
    protected $primaryKey = "no_resep";
    protected  $fillable = ['tanggal_resep','id_dokter','id_pasien'];
    public $timestamps = false;

    public function detail_resep(){
    	return $this->hasMany('App\DetailResep');
    }

    public function dokter(){
    	return $this->belongsTo('App\dokter');
    }
}

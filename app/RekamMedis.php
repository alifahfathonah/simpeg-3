<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{
    //
	protected $primaryKey = "id_rekam_medis";
    protected  $fillable = ['tanggal','id_dokter','id_registrasi','catatan','diagnosa','tindakan_medis','terapi'];
    public $timestamps = false;

    public function dokter(){
    	return $this->belongsTo('App\Dokter');
    }
}

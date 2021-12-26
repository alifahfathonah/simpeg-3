<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
	protected $primaryKey = "id_registrasi";
    protected  $fillable = ['id_registrasi','nama_pasien','tanggal_lahir_pasien','alamat_pasien','no_hp_pasien','status_peserta','no_kartu_kesehatan'];
    public $timestamps = false;
}

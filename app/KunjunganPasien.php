<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KunjunganPasien extends Model
{
    //
    protected $primaryKey = "id_kunjungan_pasien";
    protected  $fillable = ['tanggal','id_dokter','id_registrasi','kode_diagnosa','kode_diagnosa','keterangan'];
}

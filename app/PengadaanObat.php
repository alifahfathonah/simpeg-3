<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengadaanObat extends Model
{
    //
    protected $primaryKey = "id_pengadaan_obat";
    protected  $fillable = ['id_pengadaan_obat','id_obat','tanggal','jumlah','asal_obat'];
    public $timestamps = false;
}

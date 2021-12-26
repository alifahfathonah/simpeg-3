<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPegawai extends Model
{
    protected $primaryKey = "id_data_pegawai";
    protected  $fillable = ['nama_pegawai','tempat_lahir','tgl_lahir','pendidikan_terakhir','NIP','id_jabatan','id_pangkat','id_sekolah','tmt_tugas','no_surat_tugas','status_pegawai',''];
    public $timestamps = false;
}

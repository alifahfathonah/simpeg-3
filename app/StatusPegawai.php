<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusPegawai extends Model
{
    protected $primaryKey = "id_status";
    protected  $fillable = ['status_pegawai'];
    public $timestamps = false;
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pangkat extends Model
{
    protected $primaryKey = "id_pangkat";
    protected  $fillable = ['nama_pangkat'];
    public $timestamps = false;
}

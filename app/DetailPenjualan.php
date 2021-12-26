<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPenjualan extends Model
{
    protected $primaryKey = "id_detail_penjualan";
    protected  $fillable = ['id_penjualan','id_obat','qty','harga','status'];

    public function dataobat(){
    	return $this->hasOne('App\DetailPenjualan');
    }
}
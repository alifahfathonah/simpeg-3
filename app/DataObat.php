<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataObat extends Model
{
    //
    protected  $primaryKey = "id_obat";
    protected  $fillable   = ['id_obat','nama_obat','kategori_obat','harga_jual','stok_minimal','stok'];
    public $timestamps = false;

    public function detailpenjualan(){
    	return $this->belongsTo('App\DetailPenjualan');
    }
}

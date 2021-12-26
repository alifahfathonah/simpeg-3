<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailResep extends Model
{
    //
    protected $primaryKey = "id_detail_resep";
    protected  $fillable = ['no_resep','id_obat','dosis','qty','keterangan'];
    public $timestamps = false;

    public function resep(){
    	return $this->belongsTo('App\Resep');
    }
}

<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataPegawai;
use App\Jabatan;
use App\Pangkat;
use App\StatusPegawai;
use PDF;

class LaporanSKPegawaiController extends Controller
{
    function index() {
		$this->data['datapegawai'] = DataPegawai::orderBy('nama_pegawai')->paginate(20);
        $datapegawai = \DB::table('data_pegawais')
                    ->join('jabatans','data_pegawais.id_jabatan','=','jabatans.id_jabatan')
                    ->join('pangkats','data_pegawais.id_pangkat','=','pangkats.id_pangkat')
                    ->join('status_pegawais','data_pegawais.status_pegawai','=','status_pegawais.id_status')
                    ->where('status_pegawais.status_pegawai','=','HONORER')
                    ->orderBy('nama_pegawai','asc')
                    ->get();
        $this->data['datapegawai'] = $datapegawai;        
        return view('backend.laporanskpegawai.index',$this->data);
    }

    public function show($id_data_pegawai){
        $sk = DataPegawai::find($id_data_pegawai);
        $pdf = PDF::loadView('backend.laporan.cetak_sk',compact('sk'));
        return $pdf->stream('pdf.pdf');
    }
}

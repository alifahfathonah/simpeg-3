<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;
use App\DataPegawai;
use App\Jabatan;
use App\Pangkat;
use App\StatusPegawai;

class LaporanDataPegawaiController extends Controller
{
    function index() {
		$datapegawai = \DB::table('data_pegawais')
                    ->join('jabatans','data_pegawais.id_jabatan','=','jabatans.id_jabatan')
                    ->join('pangkats','data_pegawais.id_pangkat','=','pangkats.id_pangkat')
                    ->join('status_pegawais','data_pegawais.status_pegawai','=','status_pegawais.id_status')
                    ->orderBy('nama_pegawai','asc')
                    ->get();
        $pdf = PDF::loadView('backend.laporan.laporandatapegawai',compact('datapegawai'));
        return $pdf->stream('pdf.pdf');
    }
}

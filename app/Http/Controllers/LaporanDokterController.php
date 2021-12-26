<?php

namespace App\Http\Controllers\pimpinan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;
use App\Dokter;

class LaporanDokterController extends Controller
{
    public function index(){
    	$dokter = \DB::table('dokters')
                    ->get();
        $pdf = PDF::loadView('backend.laporan.laporandatadokter',compact('dokter'));
        return $pdf->stream('pdf.pdf');
    }
}

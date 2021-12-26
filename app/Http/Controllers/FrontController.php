<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\DataSekolah;
use App\DataPegawai;
use App\Profil;
use App\Galeri;

class FrontController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data['menu'] = "dashboard";
         $data['menus'] = "";
         $data['datasekolah'] = DataSekolah::all();
         $data['datapegawai'] = \DB::table('data_pegawais')
                    ->join('jabatans','data_pegawais.id_jabatan','=','jabatans.id_jabatan')
                    ->join('pangkats','data_pegawais.id_pangkat','=','pangkats.id_pangkat')
                    ->join('status_pegawais','data_pegawais.status_pegawai','=','status_pegawais.id_status')
                    ->join('data_sekolahs','data_pegawais.id_sekolah','=','data_sekolahs.id_data_sekolah')
                    ->orderBy('nama_pegawai','asc')
                    ->get();
    	return view('front.home',$data);
    }
	
	
	  public function search (Request $request) {
		$data['menu'] 	= "dashboard";
        $data['menus'] 	= "";	
		$cari = $request->get('search');
		$opsi = $request->get('opsi');
		if ($opsi == "nama_Pegawai") {
			$data['datapegawai'] = \DB::table('data_pegawais')
                    ->join('jabatans','data_pegawais.id_jabatan','=','jabatans.id_jabatan')
                    ->join('pangkats','data_pegawais.id_pangkat','=','pangkats.id_pangkat')
                    ->join('status_pegawais','data_pegawais.status_pegawai','=','status_pegawais.id_status')
					->join('data_sekolahs','data_pegawais.id_sekolah','=','data_sekolahs.id_data_sekolah')
                    ->where('nama_pegawai','LIKE','%'.$cari.'%')->paginate(50);
		} else 	if ($opsi == "sekolah") {
			$data['datapegawai'] = \DB::table('data_pegawais')
                    ->join('jabatans','data_pegawais.id_jabatan','=','jabatans.id_jabatan')
                    ->join('pangkats','data_pegawais.id_pangkat','=','pangkats.id_pangkat')
                    ->join('status_pegawais','data_pegawais.status_pegawai','=','status_pegawais.id_status')
					->join('data_sekolahs','data_pegawais.id_sekolah','=','data_sekolahs.id_data_sekolah')
                    ->where('id_sekolah','=',$cari)->paginate(50);	
		}
        return view('front.cari', $data);
    }
	
	
	 function profil() {
		$data['menu'] = "profil";
        $data['menus'] = "";	
		$data['dataprofil'] = Profil::all();
        return view('front.profil', $data);
    }
	
	function galeri() {
		$data['menu'] = "galeri";
        $data['menus'] = "";	
		$data['datagaleri'] = Galeri::all();
        return view('front.galeri', $data);
    }
	
}












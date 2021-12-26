<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataPegawai;
use App\DataSekolah;
use App\Jabatan;
use App\Pangkat;
use App\StatusPegawai;

class DataPegawaiController extends Controller
{
    function index() {
		$data['menu'] = "pegawai";
        $data['menus'] = "masterdata";	
		$this->data['datapegawai'] = DataPegawai::orderBy('nama_pegawai')->paginate(20);
        $datapegawai = \DB::table('data_pegawais')
                    ->join('jabatans','data_pegawais.id_jabatan','=','jabatans.id_jabatan')
                    ->join('pangkats','data_pegawais.id_pangkat','=','pangkats.id_pangkat')
                    ->join('status_pegawais','data_pegawais.status_pegawai','=','status_pegawais.id_status')
                    ->join('data_sekolahs','data_pegawais.id_sekolah','=','data_sekolahs.id_data_sekolah')
                    ->orderBy('nama_pegawai','asc')
                    ->get();
        $this->data['datapegawai'] = $datapegawai;        
        return view('backend.datapegawai.index',$this->data, $data);
    }

    function create() {
		$data['menu'] = "pegawai";
        $data['menus'] = "masterdata";	
    	$this->data['jabatan'] = Jabatan::pluck('nama_jabatan','id_jabatan');
    	$this->data['pangkat'] = Pangkat::pluck('nama_pangkat','id_pangkat');
    	$this->data['data_sekolah'] = DataSekolah::pluck('nama_sekolah','id_data_sekolah');
    	$this->data['status_pegawai'] = StatusPegawai::pluck('status_pegawai','id_status');
    	return view ('backend.datapegawai.create',$this->data, $data);
    }

    public function store(request $request){
    	$this->validate($request,[
            'nama_pegawai'=>'required',
            'tempat_lahir'=>'required',
            'tgl_lahir'=>'required',
            'pendidikan_terakhir'=>'required',
            'NIP'=>'required|numeric',
            'id_jabatan'=>'required',
            'id_pangkat'=>'required',
            'status_pegawai'=>'required',
            'id_sekolah'=>'required']);
        $data = $request->all();
        DataPegawai::create($data);
        return redirect('admin/data_pegawai');
    }

    public function edit($id){
		$data['menu'] = "pegawai";
        $data['menus'] = "masterdata";	
    	$data['jabatan'] = Jabatan::pluck('nama_jabatan','id_jabatan');
    	$data['pangkat'] = Pangkat::pluck('nama_pangkat','id_pangkat');
		$data['data_sekolah'] = DataSekolah::pluck('nama_sekolah','id_data_sekolah');
    	$data['status_pegawai'] = StatusPegawai::pluck('status_pegawai','id_status');
    	$data['data_pegawai'] = DataPegawai::find($id);
    	return view('backend.datapegawai.edit',$data);
    }

    public function update($id, request $request){
		$this->validate($request,[
            'nama_pegawai'=>'required',
            'tempat_lahir'=>'required',
            'tgl_lahir'=>'required',
            'pendidikan_terakhir'=>'required',
            'NIP'=>'required|numeric',
            'id_jabatan'=>'required',
            'id_pangkat'=>'required',
            'status_pegawai'=>'required',
            'id_sekolah'=>'required']);
    	$data = $request->all();
    	$datapegawai = DataPegawai::find($id);
    	$datapegawai->update($data);
    	return redirect('admin/data_pegawai');
    }

    public function destroy($id){
    	$datapegawai = DataPegawai::find($id);
    	$datapegawai->delete();
    	return redirect('admin/data_pegawai');	
    }

    public function search (Request $request) {
		$data['menu'] = "pegawai";
        $data['menus'] = "masterdata";	
		$cari = $request->get('search');
        $data['datapegawai'] = \DB::table('data_pegawais')
                    ->join('jabatans','data_pegawais.id_jabatan','=','jabatans.id_jabatan')
                    ->join('pangkats','data_pegawais.id_pangkat','=','pangkats.id_pangkat')
                    ->join('status_pegawais','data_pegawais.status_pegawai','=','status_pegawais.id_status')
					->join('data_sekolahs','data_pegawais.id_sekolah','=','data_sekolahs.id_data_sekolah')
                    ->where('nama_pegawai','LIKE','%'.$cari.'%')->paginate(50);
        return view('backend.datapegawai.index', $data);
    }

    public function show($id){
		$data['menu'] = "pegawai";
        $data['menus'] = "masterdata";	
        $datapegawai = \DB::table('data_pegawais')
                    ->join('jabatans','data_pegawais.id_jabatan','=','jabatans.id_jabatan')
                    ->join('pangkats','data_pegawais.id_pangkat','=','pangkats.id_pangkat')
                    ->join('status_pegawais','data_pegawais.status_pegawai','=','status_pegawais.id_status')
					->join('data_sekolahs','data_pegawais.id_sekolah','=','data_sekolahs.id_data_sekolah')
                    ->where('id_data_pegawai','=',$id)
                    ->get();
        $data['detaildatapegawai']= $datapegawai;  
        $data['datapegawai'] = DataPegawai::find($id);
        return view ('backend.datapegawai.show',$data);



        
    }
}
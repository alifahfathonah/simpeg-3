<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataSekolah;

class DataSekolahController extends Controller
{
    function index() {
		$data['menu'] = "sekolah";
        $data['menus'] = "masterdata";	
		$data['datasekolah'] = DataSekolah::orderBy('nama_sekolah')->paginate(20);
        return view('backend.datasekolah.index', $data);
    }

    function create() {
		$data['menu'] = "sekolah";
        $data['menus'] = "masterdata";	
    	return view ('backend.datasekolah.create', $data);
    }

    public function store(request $request){
    	$this->validate($request,[
            'nama_sekolah'=>'required',
            'alamat_sekolah'=>'required',
            'kota_sekolah'=>'required']);
        $data = $request->all();
        datasekolah::create($data);
        return redirect('admin/data_sekolah');
    }

    public function edit($id){
		$data['menu'] = "sekolah";
        $data['menus'] = "masterdata";	
    	$data['data_sekolah'] = datasekolah::find($id);
    	return view('backend.datasekolah.edit',$data);
    }

    public function update($id, request $request){
		$this->validate($request,[
            'nama_sekolah'=>'required',
            'alamat_sekolah'=>'required',
            'kota_sekolah'=>'required']);
    	$data = $request->all();
    	$datasekolah = datasekolah::find($id);
    	$datasekolah->update($data);
    	return redirect('admin/data_sekolah');
    }

    public function destroy($id){
    	$datasekolah = datasekolah::find($id);
    	$datasekolah->delete();
    	return redirect('admin/data_sekolah');	
    }

}
<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\StatusPegawai;

class StatusPegawaiController extends Controller
{
    function index() {
		$data['menu'] = "status_pegawai";
        $data['menus'] = "masterdata";	
    	$data['statuspegawai'] 	= StatusPegawai::all();
    	$statuspegawai 			= StatusPegawai::paginate(20);
    	$data['statuspegawai'] 	= $statuspegawai->setPath('statuspegawai');
    	return view('backend.statuspegawai.index',$data);
    }

    function create() {
		$data['menu'] = "status_pegawai";
        $data['menus'] = "masterdata";	
    	return view ('backend.statuspegawai.create',$data);
    }

    public function store(request $request){
    	$this->validate($request,[
	    	'status_pegawai'	=>'required|max:60']);
        $data = $request->all();
        StatusPegawai::create($data);
        return redirect('admin/status_pegawai');
    }

    public function edit($id){
		$data['menu'] = "status_pegawai";
        $data['menus'] = "masterdata";	
    	$data['statuspegawai'] = StatusPegawai::find($id);
    	return view('backend.statuspegawai.edit',$data);
    }

    public function update($id, request $request){
		$this->validate($request,[
	    	'status_pegawai'	=>'required|max:60']);
    	$data = $request->all();
    	$statuspegawai = StatusPegawai::find($id);
    	$statuspegawai->update($data);
    	return redirect('admin/status_pegawai');
    }

    public function destroy($id){
    	$statuspegawai = StatusPegawai::find($id);
    	$statuspegawai->delete();
    	return redirect('admin/status_pegawai');	
    }
}
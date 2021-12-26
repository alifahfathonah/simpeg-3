<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Profil;

class ProfilController extends Controller
{
    function index() {
		$data['menu'] = "profil";
        $data['menus'] = "halaman";	
		$data['dataprofil'] = Profil::all();
        return view('backend.profil.index', $data);
    }

  

    public function edit($id){
		$data['menu'] = "profil";
        $data['menus'] = "halaman";	
    	$data['dataprofil'] = Profil::find($id);
    	return view('backend.profil.edit',$data);
    }

    public function update($id, request $request){
		$this->validate($request,[
            'isi_profil'=>'required',
            'tgl_profil'=>'required']);
    	$data = $request->all();
    	$dataprofil = Profil::find($id);
    	$dataprofil->update($data);
    	return redirect('admin/profil');
    }

   
}
<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jabatan;

class JabatanController extends Controller
{
    function index() {
		 $data['menu'] = "jabatan";
         $data['menus'] = "masterdata";
    	$data['jabatan'] 	= jabatan::all();
    	$jabatan 			= jabatan::paginate(20);
    	$data['jabatan'] 	= $jabatan->setPath('jabatan');
    	return view('backend.jabatan.index',$data);
    }

    function create() {
		 $data['menu'] = "jabatan";
         $data['menus'] = "masterdata";
    	return view ('backend.jabatan.create',$data);
    }

    public function store(request $request){
    	$this->validate($request,[
	    	'nama_jabatan'	=>'required|max:60']);
        $data = $request->all();
        Jabatan::create($data);
        return redirect('admin/jabatan');
    }

    public function edit($id){
		 $data['menu'] = "jabatan";
         $data['menus'] = "masterdata";
    	$data['jabatan'] = Jabatan::find($id);
    	return view('backend.jabatan.edit',$data);
    }

    public function update($id, request $request){
		$this->validate($request,[
	    	'nama_jabatan'	=>'required|max:60']);
    	$data = $request->all();
    	$jabatan = Jabatan::find($id);
    	$jabatan->update($data);
    	return redirect('admin/jabatan');
    }

    public function destroy($id){
    	$jabatan = Jabatan::find($id);
    	$jabatan->delete();
    	return redirect('admin/jabatan');	
    }
}

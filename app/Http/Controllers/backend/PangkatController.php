<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pangkat;

class PangkatController extends Controller
{
    function index() {
		$data['menu'] = "pangkat";
        $data['menus'] = "masterdata";	
    	$data['pangkat'] 	= pangkat::all();
    	$pangkat 			= pangkat::paginate(20);
    	$data['pangkat'] 	= $pangkat->setPath('pangkat');
    	return view('backend.pangkat.index',$data);
    }

    function create() {
		$data['menu'] = "pangkat";
        $data['menus'] = "masterdata";	
    	return view ('backend.pangkat.create',$data);
    }

    public function store(request $request){
    	$this->validate($request,[
	    	'nama_pangkat'	=>'required|max:60']);
        $data = $request->all();
        Pangkat::create($data);
        return redirect('admin/pangkat');
    }

    public function edit($id){
		$data['menu'] = "pangkat";
        $data['menus'] = "masterdata";	
    	$data['pangkat'] = Pangkat::find($id);
    	return view('backend.pangkat.edit',$data);
    }

    public function update($id, request $request){
		$this->validate($request,[
	    	'nama_pangkat'	=>'required|max:60']);
    	$data = $request->all();
    	$pangkat = Pangkat::find($id);
    	$pangkat->update($data);
    	return redirect('admin/pangkat');
    }

    public function destroy($id){
    	$pangkat = Pangkat::find($id);
    	$pangkat->delete();
    	return redirect('admin/pangkat');	
    }
}
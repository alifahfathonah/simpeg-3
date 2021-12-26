<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Galeri;
use Illuminate\Support\Facades\Input;

class GaleriController extends Controller
{
    function index() {
		$data['menu'] = "galeri";
        $data['menus'] = "halaman";	
		$data['datagaleri'] = Galeri::orderBy('nama_galeri')->get();
            
        return view('backend.galeri.index', $data);
    }

    function create() {
		$data['menu'] = "galeri";
        $data['menus'] = "halaman";	
    	return view ('backend.galeri.create', $data);
    }

    public function store(request $request){
    	$datagaleri = new Galeri;
			
		$file = $request->file('file');	
		$filegambar	= $file->getClientOriginalName();
		$nama_galeri	= Input::get('nama_galeri');
		$tgl_upload		= Input::get('tgl_upload');
		
		
		
		$datagaleri->nama_galeri	= $nama_galeri;
 		$datagaleri->tgl_upload		= $tgl_upload;
 		$datagaleri->file			= $filegambar;
		
		$destinationPath = 'file/';
		$file->move($destinationPath,$file->getClientOriginalName());	
		
		
       $datagaleri->save();
        return redirect('admin/galeri');
    }

    

    public function destroy($id){
    	$galeri = galeri::find($id);
    	$galeri->delete();
    	return redirect('admin/galeri');	
    }

   
}
<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GajiController extends Controller
{
    function index() {
		$data['menu'] = "gaji";
        $data['menus'] = "masterdata";	
        return view('backend.gaji.index',$data);
    }

    function create() {
		$data['menu'] = "gaji";
        $data['menus'] = "masterdata";	
    	return view ('backend.gaji.create', $data);
    }
}

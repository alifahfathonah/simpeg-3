<?php namespace App\Http\Controllers;

use App\user1;
use Illuminate\Http\Request;
use Validator, DB, Session;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{
    

    public function index(){
		if (Session::get('id_admin')!='') 
			return redirect('home');
		
		return view('auth/login');
		
    }
	
	 public function login(Request $request){
		$validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ], [
            'username.required' => 'Username diperlukan!',
            'password.required' => 'Password diperlukan'
        ]);
		
		if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        } else {
			$username = $request->username;
			$password = md5($request->password);
			$user1 = user1::where('username',$username)->where('password',$password)->get()->count();
					
					
             if ($validator->fails()) {
                if(Auth::user()->level == 'admin'){
                    return redirect()->intended('admin');
                } elseif(Auth::user()->level == 'apoteker'){
                    return redirect()->intended('apoteker');
                } elseif(Auth::user()->level == 'operator'){
                    return redirect()->intended('operator');
                } elseif(Auth::user()->level == 'pimpinan'){
                    return redirect()->intended('pimpinan');
                }
            } else {
                $validator->errors()->add('password', 'Password tidak benar');
                return redirect('/')
                            ->withErrors($validator)
                            ->withInput();
            }
        }
		
    }

    
	
	
}
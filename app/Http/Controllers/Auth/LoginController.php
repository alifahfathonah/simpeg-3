<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Input;
use App\User;
use App\Http\Requests\updateuser;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/';
    //protected $username = 'username';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest', ['except' => 'logout']);
    }

    public function Login(Request $request){
        $validator = Validator::make($request->all(), [
            'username' => 'required|exists:users,username',
            'password' => 'required',
        ], [
            'username.required' => 'Username diperlukan!',
            'username.exists' => 'Username tidak diketemukan',
            'password.required' => 'Password diperlukan'
        ]);

        if ($validator->fails()) {
            return redirect('/')
                        ->withErrors($validator)
                        ->withInput();
        } else {
             if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
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

    public function password(){
		 $data['menu'] = "dashboard";
         $data['menus'] = "";
		 $username = Auth::user()->username;
		 $data['password'] = User::where('username',$username)->get();
        return view('auth.password',$data);
    }
	
	public function save(updateuser $request){
		$id = Input::get('id');
		
		
		$user = User::find($id);
    	$user->name 	= Input::get('name');
		$user->username = Input::get('username');
		$user->level = Input::get('level');
		$user->password = Hash::make(Input::get('password'));

		$user->update();
       
        return redirect('/admin')->with('status', 'Akun Anda telah berhasil diedit');;
    }
	
	
}
<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\user;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\adduser;
use App\Http\Requests\updateuser;

class UserController extends Controller
{
	public function index(){
		//$users = User::all();
		$users = \DB::table('users')->orderBy('name')->get();
		return View('user.index', ['users' => $users]);
	}

	public function create(){
		return View('user.create');
	}

	public function store(adduser $request){
		$user = new User;
		$user->name 	  = Input::get('name');
		$user->username   = Input::get('username');
		$user->password   = Hash::make(Input::get('password'));
		$user->level      = Input::get('level');
		$user->save();
		return redirect('admin/user');
	}

	public function edit($id){
		$user = User::find($id);
		return View('user.edit', [ 'user' => $user ]);
	}

	public function update($id, updateuser $request){
		$user = User::find($id);
		$user->name 	= Input::get('name');
		$user->username = Input::get('username');
		$user->password = Hash::make(Input::get('password'));
		$user->level    = Input::get('level');
		$user->update();
		return Redirect('admin/user');
	}
	
	public function destroy($id){
		User::destroy($id);
		return Redirect('admin/user');
	}
}
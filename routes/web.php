<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/','LoginController@index');
Route::post('/','LoginController@login');
Route::get('home','HomeController@index');
Route::auth();	





//Route::get('/','FrontController@index')->middleware('guest');
Route::get('cari','FrontController@search');
Route::get('profil','FrontController@profil');
Route::get('galeri','FrontController@galeri');

// Routing untuk authentifikasi
Route::group(['namespace' => 'auth'],function(){
	Route::post('/login','LoginController@login')->name('login');
	Route::get('/password','LoginController@password')->name('password');
	Route::post('/password','LoginController@save')->name('passwordsave');
    Route::get('/logout',function(){
        Auth::logout();
        return redirect('/');
    })->name('logout');
});



// ROUTING UNTUK USER LEVEL ADMIN
Route::group(['namespace' => 'backend','prefix' => 'admin','middleware' => ['admin','web','auth']], function() {
	Route::get('/', 'HomeController@index');
    Route::resource('jabatan','JabatanController');
    Route::resource('pangkat','PangkatController');
    Route::resource('status_pegawai','StatusPegawaiController');
    Route::resource('data_sekolah','DataSekolahController');
    Route::resource('data_pegawai','DataPegawaiController');
    Route::get('caridatapegawai','DataPegawaiController@search');
	Route::resource('user','UserController');
	Route::resource('gaji','GajiController');
	Route::resource('profil','ProfilController');
	Route::resource('galeri','GaleriController');
	Route::resource('laporandatapegawai','LaporanDataPegawaiController');
	Route::resource('laporanskpegawai','LaporanSKPegawaiController');

});

/*
Route::group(['middleware'=>['web','auth']], function(){
	Route::get('/', function(){
		if(Auth::user()->level == 'admin'){
			return view('backend.dashboard');
		} 
		else if(Auth::user()->level == 'pimpinan'){
			return view('pimpinan.dashboard');
		}
		else if(Auth::user()->level == 'operator'){
			return view('operator.dashboard');
		}
		else if(Auth::user()->level == 'apoteker'){
			return view('apoteker.dashboard');
		}
	});
});
*/


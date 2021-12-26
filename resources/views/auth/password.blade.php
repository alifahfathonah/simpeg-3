@extends('template/admin')
@section('content')

{!! Html::ul($errors->all()) !!}

 <form action="{{ url('/password') }}" method="post">
{!! csrf_field() !!}
<h2 class="page-header">
       &nbsp;<i class="fa fa-desktop"></i> <b>SISTEM INFORMASI PEGAWAI YPPK</b>
</h2>
<div class="page-body">
<h3>Edit Password</h3>
@foreach($password as $item)
<table class="table table-bordered table-striped">
	<tr><td>Nama Lengkap</td><td>
	<input class="form-control" placeholder="" name="id" type="hidden" value="{{$item->id}}">
	<input class="form-control" placeholder="Nama" name="name" type="text" value="{{$item->name}}"></td></tr>
	<tr><td>Username</td><td><input class="form-control" placeholder="Username" name="username" type="text" value="{{$item->username}}"></td></tr>
	<tr><td>Password</td><td><input class="form-control" placeholder="Password" name="password" type="text" value=""></td></tr>
	<tr><td>Konfirmasi Password</td><td><input class="form-control" placeholder="Password" name="password_lagi" type="text" value="">
	<input class="form-control" placeholder="" name="level" type="hidden" value="{{$item->level}}">
	</td></tr>
	<tr><td colspan="2" align="right">
		{!! Link_to('/admin','Kembali',['class'=>'btn btn-warning btn-sm']) !!}
		{!! Form::submit('Simpan',['class'=>'btn btn-success btn-sm']) !!}
	</td>
	</tr>
</table>
@endforeach
{!! Form::close()!!}
</div>
@stop
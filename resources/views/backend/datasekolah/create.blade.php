@extends('template/admin')
@section('content')

{!! Html::ul($errors->all()) !!}
{!! Form::open(array('url'=>'admin/data_sekolah')) !!}
<h2 class="page-header">
       &nbsp;<i class="fa fa-desktop"></i> <b>SISTEM INFORMASI PEGAWAI YPPK</b>
</h2>
<div class="page-body">
<h3>Tambah Data Sekolah</h3>
<table class="table table-bordered table-striped">
	<tr><td>Nama Sekolah</td><td>{!! Form::text('nama_sekolah',null,['class'=>'form-control','placeholder'=>'NAMA SEKOLAH']) !!}</td></tr>
	<tr><td>Alamat</td><td>{!! Form::text('alamat_sekolah',null,['class'=>'form-control','placeholder'=>'ALAMAT']) !!}</td></tr>
	<tr><td>Kota</td><td>{!! Form::text('kota_sekolah',null,['class'=>'form-control','placeholder'=>'KOTA']) !!}</td></tr>
	
	<tr><td colspan="2" align="right">
		{!! Link_to('admin/data_sekolah','Kembali',['class'=>'btn btn-warning btn-sm']) !!}
		{!! Form::submit('Simpan',['class'=>'btn btn-success btn-sm']) !!}
	</td>
	</tr>
</table>
{!! Form::close()!!}
</div>
@stop
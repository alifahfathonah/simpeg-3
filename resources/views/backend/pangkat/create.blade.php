@extends('template/admin')
@section('content')

{!! Html::ul($errors->all()) !!}
{!! Form::open(array('url'=>'admin/pangkat')) !!}
<h2 class="page-header">
       &nbsp;<i class="fa fa-desktop"></i> <b>SISTEM INFORMASI PEGAWAI YPPK</b>
</h2>
<div class="page-body">
<h3>Tambah Data Pangkat</h3>
<table class="table table-bordered table-striped">
	<tr><td>Nama Pangkat</td><td>{!! Form::text('nama_pangkat',null,['class'=>'form-control','placeholder'=>'NAMA PANGKAT']) !!}</td></tr>
	<tr><td colspan="2" align="right">
		{!! Link_to('admin/pangkat','Kembali',['class'=>'btn btn-warning btn-sm']) !!}
		{!! Form::submit('Simpan',['class'=>'btn btn-success btn-sm']) !!}
	</td>
	</tr>
</table>
{!! Form::close()!!}
</div>
@stop
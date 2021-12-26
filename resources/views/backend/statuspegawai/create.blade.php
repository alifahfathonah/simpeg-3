@extends('template/admin')
@section('content')

{!! Html::ul($errors->all()) !!}
{!! Form::open(array('url'=>'admin/status_pegawai')) !!}
<h2 class="page-header">
       &nbsp;<i class="fa fa-desktop"></i> <b>SISTEM INFORMASI PEGAWAI YPPK</b>
</h2>
<div class="page-body">	
<h3>Tambah Data Status Pegawai</h3>
<table class="table table-bordered table-striped">
	<tr><td>Status Pegawai</td><td>{!! Form::text('status_pegawai',null,['class'=>'form-control','placeholder'=>'STATUS PEGAWAI']) !!}</td></tr>
	<tr><td colspan="2" align="right">
		{!! Link_to('admin/status_pegawai','Kembali',['class'=>'btn btn-warning btn-sm']) !!}
		{!! Form::submit('Simpan',['class'=>'btn btn-success btn-sm']) !!}
	</td>
	</tr>
</table>
{!! Form::close()!!}
</div>
@stop
@extends('template/admin')
@section('content')

<h2 class="page-header">
       &nbsp;<i class="fa fa-desktop"></i> <b>SISTEM INFORMASI PEGAWAI YPPK</b>
</h2>
<div class="page-body">	
<h3> Status Pegawai</h3>
{!! Html::ul($errors->all()) !!}
{!! Form::model($statuspegawai,array('url'=>'admin/status_pegawai/'.$statuspegawai->id_status,'method'=>'patch'))!!}
<table class="table table-bordered table-striped">

	<tr><td>Nama Jabatan</td><td>{!! Form::text('status_pegawai',null,['class'=>'form-control','placeholder'=>'STATUS PEGAWAI']) !!}</td></tr>
	<tr><td colspan="2" align="right">
		{!! link_to('admin/status_pegawai','Kembali',['class'=>'btn btn-warning btn-sm']) !!}
		{!! Form::submit('Perbarui Data',['class'=>'btn btn-primary btn-sm']) !!}
	</td></tr>
</table>
{!! Form::close()!!}
</div>
@stop
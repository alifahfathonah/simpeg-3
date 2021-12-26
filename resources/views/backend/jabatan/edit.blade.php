@extends('template/admin')
@section('content')

<h2 class="page-header">
       &nbsp;<i class="fa fa-desktop"></i> <b>SISTEM INFORMASI PEGAWAI YPPK</b>
</h2>
<div class="page-body">
<h3>Edit Jabatan</h3>
	
{!! Html::ul($errors->all()) !!}
{!! Form::model($jabatan,array('url'=>'admin/jabatan/'.$jabatan->id_jabatan,'method'=>'patch'))!!}
<table class="table table-bordered table-striped">
	<tr><td>Nama Jabatan</td><td>{!! Form::text('nama_jabatan',null,['class'=>'form-control','placeholder'=>'NAMA JABATAN']) !!}</td></tr>
	<tr><td colspan="2" align="right">
		{!! link_to('admin/jabatan','Kembali',['class'=>'btn btn-warning btn-sm']) !!}
		{!! Form::submit('Perbarui Data',['class'=>'btn btn-primary btn-sm']) !!}
	</td></tr>
</table>
{!! Form::close()!!}
</div>
@stop
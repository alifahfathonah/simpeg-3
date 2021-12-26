@extends('template/admin')
@section('content')

<h2 class="page-header">
       &nbsp;<i class="fa fa-desktop"></i> <b>SISTEM INFORMASI PEGAWAI YPPK</b>
</h2>
<div class="page-body">	
<h3>Edit Pangkat</h3>
{!! Html::ul($errors->all()) !!}
{!! Form::model($pangkat,array('url'=>'admin/pangkat/'.$pangkat->id_pangkat,'method'=>'patch'))!!}
<table class="table table-bordered table-striped">

	<tr><td>Nama Pangkat</td><td>{!! Form::text('nama_pangkat',null,['class'=>'form-control','placeholder'=>'NAMA PANGKAT']) !!}</td></tr>
	<tr><td colspan="2" align="right">
		{!! link_to('admin/pangkat','Kembali',['class'=>'btn btn-warning btn-sm']) !!}
		{!! Form::submit('Perbarui Data',['class'=>'btn btn-primary btn-sm']) !!}
	</td></tr>
</table>
{!! Form::close()!!}
</div>
@stop
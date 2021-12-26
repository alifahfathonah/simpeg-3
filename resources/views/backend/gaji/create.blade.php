@extends('template/admin')
@section('content')

{!! Html::ul($errors->all()) !!}
{!! Form::open(array('url'=>'admin/jabatan')) !!}
<h2 class="page-header">
       &nbsp;<i class="fa fa-desktop"></i> <b>SISTEM INFORMASI PEGAWAI YPPK</b>
</h2>
<div class="page-body">	
<h3>Tambah Data Gaji Pegawai YPPK</h3>
<table class="table table-bordered table-striped">
	<tr><td>Nama Jabatan</td><td>{!! Form::text('nama_jabatan',null,['class'=>'form-control','placeholder'=>'NAMA JABATAN']) !!}</td></tr>
	<tr><td colspan="2" align="right">
		{!! Link_to('admin/jabatan','Kembali',['class'=>'btn btn-danger btn-sm']) !!}
		{!! Form::submit('Simpan',['class'=>'btn btn-danger btn-sm']) !!}
	</td>
	</tr>
</table>
{!! Form::close()!!}
</div>
@stop
@extends('template/admin')
@section('content')

{!! Html::ul($errors->all()) !!}
{!! Form::model($datagaleri,array('url'=>'admin/galeri/'.$datagaleri->id_galeri,'method'=>'patch','files' => 'true'))!!}
<h2 class="page-header">
       &nbsp;<i class="fa fa-desktop"></i> <b>SISTEM INFORMASI PEGAWAI YPPK</b>
    </h2>
<div class="page-body">	
<h3>Edit Galeri Foto</h3>
<table class="table table-bordered table-striped">
	<tr><td>Nama Galeri</td><td>{!! Form::text('nama_galeri',null,['class'=>'form-control','placeholder'=>'NAMA GALERI FOTO']) !!}</td></tr>
	<tr><td>Upload File</td><td>{!! Form::file('file',null,['class'=>'form-control','placeholder'=>'UPLOAD FILE GALERI	']) !!}</td></tr>
	<tr><td>Gambar</td><td><img class="img-responsive img-thumbnail" style="width:70px" src="{{URL::to('file/'.$datagaleri->file)}}"></td></tr>
	<input type="hidden" name="tgl_upload" value="<?php echo date('Y-m-d'); ?>"/>
	
	<tr><td colspan="2" align="right">
		{!! Link_to('admin/galeri','Kembali',['class'=>'btn btn-warning btn-sm']) !!}
		{!! Form::submit('Simpan',['class'=>'btn btn-success btn-sm']) !!}
	</td>
	</tr>
</table>
{!! Form::close()!!}
</div>
@stop
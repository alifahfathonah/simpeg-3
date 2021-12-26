@extends('template/admin')
@section('content')

{!! Html::ul($errors->all()) !!}
{!! Form::model($dataprofil,array('url'=>'admin/profil/'.$dataprofil->id_profil,'method'=>'patch'))!!}

<h2 class="page-header">
       &nbsp;<i class="fa fa-desktop"></i> <b>SISTEM INFORMASI PEGAWAI YPPK</b>
    </h2>
<div class="page-body">	
<h3>Edit Profil SIMPEG YPPK</h3>
<table class="table table-bordered table-striped">
	<tr><td>Isi Profil</td><td>
	<textarea class="form-control textarea" name="isi_profil" >{{$dataprofil->isi_profil}}</textarea>
	<input type="hidden" name="tgl_profil" value="<?php echo date('Y-m-d'); ?>"/>
	</td></tr>
	<tr><td colspan="2" align="right">
		{!! Link_to('admin/profil','Kembali',['class'=>'btn btn-warning btn-sm']) !!}
		{!! Form::submit('Simpan',['class'=>'btn btn-success btn-sm']) !!}
	</td>
	</tr>
</table>
{!! Form::close()!!}

</div>
@stop
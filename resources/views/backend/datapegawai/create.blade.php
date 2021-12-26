@extends('template/admin')
@section('content')

{!! Html::ul($errors->all()) !!}
{!! Form::open(array('url'=>'admin/data_pegawai')) !!}
<h2 class="page-header">
       &nbsp;<i class="fa fa-desktop"></i> <b>SISTEM INFORMASI PEGAWAI YPPK</b>
</h2>
<div class="page-body">
<h3>Tambah Data Pegawai</h3>
<table class="table table-bordered table-striped">
	<tr><td>Nama Lengkap</td><td>{!! Form::text('nama_pegawai',null,['class'=>'form-control','placeholder'=>'NAMA LENGKAP']) !!}</td></tr>
	<tr><td>Tempat Lahir</td><td>{!! Form::text('tempat_lahir',null,['class'=>'form-control','placeholder'=>'TEMPAT LAHIR']) !!}</td></tr>
	<tr><td>Tanggal Lahir</td><td>{!! Form::date('tgl_lahir',null,['class'=>'form-control','placeholder'=>'TANGGAL LAHIR']) !!}</td></tr>
	<tr><td>Pendidikan Terakhir</td><td>
	<select name="pendidikan_terakhir" class="form-control">
	<option value="">--PILIH PENDIDIKAN TERAKHIR--</option>
	<option value="S3">S3</option>
	<option value="S2">S2</option>
	<option value="S1">S1</option>
	<option value="S1">S0</option>
	<option value="S1">SMA</option>
	</select>
	
	</td></tr>
	<tr><td>Nomor Induk Pegawai</td><td>{!! Form::text('NIP',null,['class'=>'form-control','placeholder'=>'NOMOR INDUK PEGAWAI']) !!}</td></tr>
	<tr><td>Jabatan</td><td>{!! Form::select('id_jabatan', $jabatan, null, ['class'=>'form-control','placeholder'=>'--PILIH JABATAN--']) !!}
	<tr><td>Pangkat</td><td>{!! Form::select('id_pangkat', $pangkat, null, ['class'=>'form-control','placeholder'=>'--PILIH PANGKAT--']) !!}
	<tr><td>Status Pegawai</td><td>{!! Form::select('status_pegawai', $status_pegawai, null, ['class'=>'form-control','placeholder'=>'--PILIH STATUS PEGAWAI--']) !!}
	<tr><td>Tempat Tugas / Instansi Sekolah</td><td>{!! Form::select('id_sekolah', $data_sekolah, null,
	['class'=>'form-control','placeholder'=>'--PILIH TEMPAT TUGAS--']) !!}</td></tr>
	<tr><td>TMT Tugas</td><td>{!! Form::date('tmt_tugas',null,['class'=>'form-control','placeholder'=>'TMT TUGAS']) !!}</td></tr>
	<tr><td>Nomor Surat Tugas</td><td>{!! Form::text('no_surat_tugas',null,['class'=>'form-control','placeholder'=>'NOMOR SURAT TUGAS']) !!}</td></tr>
	<tr><td colspan="2" align="right">
		{!! Link_to('admin/data_pegawai','Kembali',['class'=>'btn btn-warning btn-sm']) !!}
		{!! Form::submit('Simpan',['class'=>'btn btn-success btn-sm']) !!}
	</td>
	</tr>
</table>
{!! Form::close()!!}
</div>
@stop
@extends('template/admin')
@section('content')

<h2 class="page-header">
       &nbsp;<i class="fa fa-desktop"></i> <b>SISTEM INFORMASI PEGAWAI YPPK</b>
</h2>
<div class="page-body">	
<h3>Detail Data Pegawai</h3>
<table class="table table-bordered table-striped">
	<tr><td>Nama </td><td>{{ $datapegawai->nama_pegawai}}</td></tr>
	<tr><td>Tempat Lahir </td><td>{{ $datapegawai->tempat_lahir}}</td></tr>
	<tr><td>Tanggal Lahir </td><td>{{ tgl_indo($datapegawai->tgl_lahir) }}</td></tr>
	<tr><td>Pendidikan Terakhir </td><td>{{ $datapegawai->pendidikan_terakhir}}</td></tr>
	<tr><td>Nomor Induk Pegawai </td><td>{{ $datapegawai->NIP}}</td></tr>
	<tr><td>Jabatan </td>
	<td><?php
	$id = $datapegawai->id_data_pegawai;
    $nama_jabatan = \DB::table('data_pegawais')
                    ->join('jabatans','data_pegawais.id_jabatan','=','jabatans.id_jabatan')
                    ->where('id_data_pegawai','=',$id)
                    ->get();
    foreach($nama_jabatan as $row){
    	echo $row->nama_jabatan;
    }
	?>
	</td></tr>
	<tr><td>Pangkat </td>
	<td><?php
   	$id = $datapegawai->id_data_pegawai;
    $nama_pangkat = \DB::table('data_pegawais')
                    ->join('pangkats','data_pegawais.id_pangkat','=','pangkats.id_pangkat')
                    ->where('id_data_pegawai','=',$id)
                    ->get();
    foreach($nama_pangkat as $row){
    	echo $row->nama_pangkat;
    }
	?>
	</td></tr>
	<tr><td>Status Pegawai </td>
	<td><?php
   	$id = $datapegawai->id_data_pegawai;
    $nama_status = \DB::table('data_pegawais')
                    ->join('status_pegawais','data_pegawais.status_pegawai','=','status_pegawais.id_status')
                    ->where('id_data_pegawai','=',$id)
                    ->get();
    foreach($nama_status as $row){
    	echo $row->status_pegawai;
    }
	?>
	</td></tr>
	<tr><td>Tempat Tugas </td><td>{{ $datapegawai->tempat_tugas}}</td></tr>
	<tr><td>TMT Tugas </td><td>{{ tgl_indo($datapegawai->tmt_tugas)}}</td></tr>
	<tr><td>Nomor Surat Tugas </td><td>{{ $datapegawai->no_surat_tugas}}</td></tr>	
</table>
</div>
@stop
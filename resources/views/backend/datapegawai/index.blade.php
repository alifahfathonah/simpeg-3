@extends('template/admin')
@section('content')

<h2 class="page-header">
       &nbsp;<i class="fa fa-desktop"></i> <b>SISTEM INFORMASI PEGAWAI YPPK</b>
    </h2>
<div class="page-body">	
<h3>Data Pegawai</h3>
    <div class="form-group">
	<div class="row">
		<div class="col-md-6">
        <a href="data_pegawai/create" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah</a>
        <a href="data_pegawai" class="btn btn-success"><i class="fa fa-refresh"></i> Semua Data</a>
		</div>
	<div class="col-md-6">	
    {!! Form::open(['method'=>'GET','url'=>'admin/caridatapegawai','role'=>'search'])  !!}
    <div class="input-group custom-search-form">
        <input type="text" class="form-control" name="search" placeholder="Search...">
            <span class="input-group-btn">
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> Cari</button>
            </span>
            </span>
    </div>
        {!! Form::close() !!}
    </div>
    </div>
    </div>


<table class="table table-bordered table-striped">
    <tr class="table-header"><th>Nama Pegawai</th><th>TTL</th><th>Pendidikan Terakhir</th><th>NIP</th><th>Jabatan</th><th>Status Pegawai</th><th colspan="3"><p align="center">Operasi</p></th></tr>
    @foreach($datapegawai as $d)
    <tr>
    <td> {{$d->nama_pegawai }} </td>
    <td> {{$d->tempat_lahir }}, {{tgl_indo($d->tgl_lahir)}} </td>
    <td> {{$d->pendidikan_terakhir }} </td>
    <td> {{$d->NIP }} </td>
    <td> {{$d->nama_jabatan }} {{$d->nama_sekolah}} </td>
    <td> {{$d->status_pegawai }} </td>
    <td width="60">
	<a href="data_pegawai/{{$d->id_data_pegawai}}/edit" class="btn btn-warning"><i class="fa fa-pencil-square"></i> Edit</a>
	
	</td>
    <td width="2%">{!! link_to('admin/data_pegawai/'.$d->id_data_pegawai,' Detail',['class'=> 'btn btn-primary']) !!}</td>
    <td width="60">
        {!! Form::open(array('method'=>'delete','url'=>'admin/data_pegawai/'.$d->id_data_pegawai))!!}
		<button onclick="return confirm('Apa Anda yakin ingin menghapusnya?');" class="btn btn-danger " value="Delete" type="submit"><i class="fa fa-times-circle"></i> Delete</button>
        {!! Form::hidden('_delete','DELETE') !!}
        {!! Form::close() !!}
    </td>
    </tr>
    @endforeach
</table>
</div>

@stop
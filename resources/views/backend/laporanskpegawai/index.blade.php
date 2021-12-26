@extends('template/admin')
@section('content')

<h2 class="page-header">
       &nbsp;<i class="fa fa-dashboard"></i> <b>SISTEM INFORMASI PEGAWAI YPPK</b>
    </h2>
<h3>Data SK Pegawai Honorer</h3>
<div class="page-body">
    <div class="col-md-6">
        <a href="data_pegawai/create" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah</a>
        <a href="data_pegawai" class="btn btn-success"><i class="fa fa-refresh"></i> Semua Data</a>
    </div>
    <div class="col-md-2">
    </div>
    <!-- Form Pencarian -->
    <div class="col-md-4">
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
<br><br>
<table class="table table-bordered table-striped">
    <tr class="table-header"><th>Nama Pegawai</th><th>TTL</th><th>Tempat Penugasan</th><th>Jabatan</th><th>TMT Tugas</th><th>NO SK</th><th>Operasi</th></tr>
    @foreach($datapegawai as $d)
    <tr>
    <td> {{$d->nama_pegawai }} </td>
    <td> {{$d->tempat_lahir }}, {{tgl_indo($d->tgl_lahir)}} </td>
    <td> {{$d->tempat_tugas }} </td>
    <td> {{$d->nama_jabatan }} </td>
    <td> {{tgl_indo($d->tmt_tugas) }} </td>
    <td> {{$d->no_surat_tugas }} </td>
    <td width="2%">{!! link_to('admin/laporanskpegawai/'.$d->id_data_pegawai,' CETAK',['class'=> 'btn btn-primary btn-sm']) !!}</td>
    </tr>
    @endforeach
</table>


@stop
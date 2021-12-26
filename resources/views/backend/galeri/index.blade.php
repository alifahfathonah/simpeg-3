@extends('template/admin')
@section('content')

<h2 class="page-header">
       &nbsp;<i class="fa fa-desktop"></i> <b>SISTEM INFORMASI PEGAWAI YPPK</b>
    </h2>
<div class="page-body">	
<h3>Galeri Foto</h3>
    <div class="form-group">
	<div class="row">
		<div class="col-md-6">
        <a href="galeri/create" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah</a>
       </div>
    </div>
    </div>


<table class="table table-bordered table-striped">
    <tr class="table-header"><th>Nama Galeri</th><th>Tanggal Upload</th><th>Nama File</th><th>Galeri</th><th colspan="3"><p align="center">Operasi</p></th></tr>
    @foreach($datagaleri as $d)
    <tr>
    <td> {{$d->nama_galeri  }} </td>
    <td> {{$d->tgl_upload  }}</td>
    <td> {{$d->file  }} </td>
	<td>
	<img class="img-responsive img-thumbnail" style="width:70px" src="{{URL::to('file/'.$d->file)}}">
	</td>
    <td width="60">
        {!! Form::open(array('method'=>'delete','url'=>'admin/galeri/'.$d->id_galeri))!!}
		<button onclick="return confirm('Apa Anda yakin ingin menghapusnya?');" class="btn btn-danger " value="Delete" type="submit"><i class="fa fa-times-circle"></i> Delete</button>
        {!! Form::hidden('_delete','DELETE') !!}
        {!! Form::close() !!}
    </td>
    </tr>
    @endforeach
</table>
</div>

@stop
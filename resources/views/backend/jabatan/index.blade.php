@extends('template/admin')
@section('content')

<h2 class="page-header">
       &nbsp;<i class="fa fa-desktop"></i> <b>SISTEM INFORMASI PEGAWAI YPPK</b>
    </h1>
<div class="page-body">	
<h3>Data Jabatan</h3>

    <div class="form-group">
        <a href="jabatan/create" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah</a>
    </div>
    

<table class="table table-bordered table-striped">
	<tr class="table-header"><th>Nama Jabatan</th><th colspan="2"><p align="center">Operasi</th></tr>
	@foreach($jabatan as $j)
	<tr>
	<td>{{ $j->nama_jabatan }}</td>
	<td width="60">
	<a href="jabatan/{{$j->id_jabatan}}/edit" class="btn btn-warning "><i class="fa fa-pencil-square"></i> Edit</a>
	</td>
	<td width="60">
		{!! Form::open(array('method'=>'delete','url'=>'admin/jabatan/'.$j->id_jabatan))!!}
		<button onclick="return confirm('Apa Anda yakin ingin menghapusnya?');" class="btn btn-danger  " value="Delete" type="submit"><i class="fa fa-times-circle"></i> Delete</button>
		{!! Form::hidden('_delete','DELETE') !!}
		{!! Form::close() !!}
	</td>
	@endforeach
</table>
{!! $jabatan->render() !!}
</div>
@stop
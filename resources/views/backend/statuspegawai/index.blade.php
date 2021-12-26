@extends('template/admin')
@section('content')

<h2 class="page-header">
       &nbsp;<i class="fa fa-desktop"></i> <b>SISTEM INFORMASI PEGAWAI YPPK</b>
    </h1>
<div class="page-body">	
<h3>Data Status Pegawai</h3>

    <div class="form-group">
        <a href="status_pegawai/create" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah</a>
    </div>

<table class="table table-bordered table-striped">
	<tr class="table-header"><th>Status Pegawai</th><th colspan="2"><p align="center">Operasi</th></tr>
	@foreach($statuspegawai as $s)
	<tr>
	<td>{{ $s->status_pegawai }}</td>
	<td width="60">
	<a href="status_pegawai/{{$s->id_status}}/edit" class="btn btn-warning "><i class="fa fa-pencil-square"></i> Edit</a>
	</td>
	<td width="60">
		{!! Form::open(array('method'=>'delete','url'=>'admin/status_pegawai/'.$s->id_status))!!}
		<button onclick="return confirm('Apa Anda yakin ingin menghapusnya?');" class="btn btn-danger  " value="Delete" type="submit"><i class="fa fa-times-circle"></i> Delete</button>
		{!! Form::hidden('_delete','DELETE') !!}
		{!! Form::close() !!}
	</td>
	@endforeach
</table>
{!! $statuspegawai->render() !!}
</div>
@stop
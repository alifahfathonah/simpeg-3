@extends('template/admin')
@section('content')

<h2 class="page-header">
       &nbsp;<i class="fa fa-desktop"></i> <b>SISTEM INFORMASI PEGAWAI YPPK</b>
    </h2>
<div class="page-body">	
<h3>Data Sekolah</h3>
    <div class="form-group">
	<div class="row">
		<div class="col-md-6">
        <a href="data_sekolah/create" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah</a>
       
		</div>
	
    </div>
    </div>


<table class="table table-bordered table-striped">
    <tr class="table-header">
	<th>Nama Sekolah</th>
	<th>Alamat</th>
	<th>Kota</th>
	<th colspan="3">Operasi</th>
	</tr>
    @foreach($datasekolah as $d)
    <tr>
    <td> {{$d->nama_sekolah }} </td>
    <td> {{$d->alamat_sekolah }}</td>
    <td> {{$d->kota_sekolah }} </td>
    <td width="60">
	<a href="data_sekolah/{{$d->id_data_sekolah}}/edit" class="btn btn-warning"><i class="fa fa-pencil-square"></i> Edit</a>
	</td>
   
    <td width="60">
        {!! Form::open(array('method'=>'delete','url'=>'admin/data_sekolah/'.$d->id_data_sekolah))!!}
		<button onclick="return confirm('Apa Anda yakin ingin menghapusnya?');" class="btn btn-danger " value="Delete" type="submit"><i class="fa fa-times-circle"></i> Delete</button>
        {!! Form::hidden('_delete','DELETE') !!}
        {!! Form::close() !!}
    </td>
    </tr>
    @endforeach
</table>
</div>

@stop
@extends('template/admin')
@section('content')

<h2 class="page-header">
       &nbsp;<i class="fa fa-desktop"></i> <b>SISTEM INFORMASI PEGAWAI YPPK</b>
    </h2>
<div class="page-body">	
<h3>Manajemen Profil</h3>
 <div class="form-group">
	<div class="row">
		<div class="col-md-6">
        <a href="profil/1/edit" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
      </div>
    </div>
    </div>    
<table class="table table-bordered table-striped">
    <tr class="table-header"><th>Isi Profil</th><th>Tanggal Update</th></tr>
    @foreach($dataprofil as $d)
    <tr>
    <td> {!! $d->isi_profil !!} </td>
    <td> {{  date('d-F-Y', strtotime($d->tgl_profil)) }}</td>
    </tr>
    @endforeach
</table>
</div>

@stop
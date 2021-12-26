@extends('template/front')
@section('content')
 <!-- Full Width Column -->
  <div class="content-wrapper" >
    <div class="row">
      
      <!-- Main content -->
     <!-- Main content -->
        <section class="content clearfix">
		 
		<div class="container-ku">
            <!-- Left col -->
			<section class="col-xs-12 ">
			
			  <!-- quick email widget -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <i class="fa fa-home"></i>
                  <h3 class="box-title">PENCARIAN DATA PEGAWAI</h3>
                  
                </div>

                <div class="box-body ">
				<div class="form-group">
					<a href="." class="btn-primary btn btn-md ">Kembali</a>
				</div>
	<table class="table table-bordered table-striped">
    <tr class="table-header"><th>Nama Pegawai</th><th>TTL</th><th>Pendidikan Terakhir</th><th>NIP</th><th>Jabatan</th><th>Status Pegawai</th></tr>
	<?php if (count($datapegawai) != 0) {?>
    @foreach($datapegawai as $d)
    <tr>
    <td> {{$d->nama_pegawai }} </td>
    <td> {{$d->tempat_lahir }}, {{tgl_indo($d->tgl_lahir)}} </td>
    <td> {{$d->pendidikan_terakhir }} </td>
    <td> {{$d->NIP }} </td>
    <td> {{$d->nama_jabatan }} {{$d->nama_sekolah}} </td>
    <td> {{$d->status_pegawai }} </td>
   
    </tr>
    @endforeach
	<?php } else { ?>
	<tr>
    <td colspan="6"> TIDAK ADA DATA</td>
    </tr>	
	<?php } ?>
</table>
        <!-- ./col -->

				</div>
              </div>
			</section>
			
		

		</div>
		 
        </section><!-- /.Left col -->
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
@stop
@extends('template/front')
@section('content')
 <!-- Full Width Column -->
  <div class="content-wrapper" >
    <div class="row">
      <!-- Content Header (Page header) -->
      <img class="img-responsive top" style="width:100%;height:300px" src="office.jpg">

      <!-- Main content -->
     <!-- Main content -->
        <section class="content clearfix">
		 
		<div class="container-ku">
            <!-- Left col -->
			<section class="col-xs-12 ">
			
			<!-- quick email widget -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <i class="fa fa-search"></i>
                  <h3 class="box-title">CARI DATA PEGAWAI</h3>
                  
                </div>

                <div class="box-body ">
				 {!! Form::open(['method'=>'GET','url'=>'cari','role'=>'search'])  !!}
				<div  class="col-xs-3" style="margin-bottom:10px">
					<div class="form-group">
						<select required name="opsi" id="opsi" onchange="opsi_cari()" class="form-control">
							<option value="" >Cari Pegawai Berdasarkan</option>
							<option value="nama_Pegawai" >Nama Pegawai</option>
							<option value="sekolah" >Sekolah / Tempat tugas</option>
							
						</select>
					</div>
				</div>
				 
				<div  class="col-xs-7" style="margin-bottom:10px">
					<div class="form-group">
							<input disabled id="Pegawai" name="search" type="text" class="form-control text-capitalize" placeholder="Pilih Opsi dulu..." >
					
						<select style="display:none" name="search" id="nama_sekolah" class="form-control">
							 @foreach($datasekolah as $d)
							<option value="{{$d->id_data_sekolah }}" >{{$d->nama_sekolah }}</option>
							 @endforeach
						</select>
					</div>
				</div> 
				<div style="padding:0 10px 0 0" class="col-xs-2"><button  disabled id="cari" class="btn btn-block btn-primary"  type="submit"><span class="glyphicon glyphicon-search text-besar"></span>&nbsp;&nbsp;<b>CARI</b></button></div>
				
			</form>	
				

				</div>
              </div>
			  
			  <!-- quick email widget -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <i class="fa fa-user"></i>
                  <h3 class="box-title">DATA PEGAWAI</h3>
                  
                </div>

                <div class="box-body ">
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
			  
	 <!-- quick email widget -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <i class="fa fa-home"></i>
                  <h3 class="box-title">DATA SEKOLAH</h3>
                  
                </div>

                <div class="box-body ">
			    <table class="table table-bordered table-striped">
    <tr class="table-header">
	<th>Nama Sekolah</th>
	<th>Alamat</th>
	<th>Kota</th>
	</tr>
    @foreach($datasekolah as $d)
    <tr>
    <td> {{$d->nama_sekolah }} </td>
    <td> {{$d->alamat_sekolah }}</td>
    <td> {{$d->kota_sekolah }} </td>
   
    </tr>
    @endforeach
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
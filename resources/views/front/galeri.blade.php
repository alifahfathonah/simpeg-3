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
                  <h3 class="box-title">GALERI FOTO SIMPEG YPPK </h3>
                  
                </div>

                <div class="box-body ">
				<div class="form-group">
					<a href="." class="btn-primary btn btn-md ">Kembali</a>
				</div>
	<?php
				$no = 1;
				$awal = 1;
				$akhir = 6;
				foreach($datagaleri as $d) {
					
				?>
					<?php if ($no == $awal) { 
					$awal = $awal + 6;
					?>
					<div class="row">
					<?php } ?>
					
					<div class="col-xs-2" >
					<label class="badge btn-block">{{$d->nama_galeri}}</label>
					<a href="{{URL::to('file/'.$d->file)}}" >
						<img class="img-responsive img-thumbnail"  src="{{URL::to('file/'.$d->file)}}">
						
					</a>	
					</div>
					
					<?php if ($no == $akhir) { 
					$akhir = $akhir + 6;
					?>
					</div>
					<hr>
					<?php } ?>
					
				<?php 
				$no++;
				} 	?>
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
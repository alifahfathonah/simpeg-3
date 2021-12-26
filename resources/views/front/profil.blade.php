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
                  <h3 class="box-title">PROFIL SIMPEG YPPK</h3>
                  
                </div>

                <div class="box-body ">
				<div class="form-group">
					<a href="." class="btn-primary btn btn-md ">Kembali</a>
				</div>


<font size=4>
@foreach($dataprofil as $d)
{!! $d->isi_profil  !!}

@endforeach
</font>
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
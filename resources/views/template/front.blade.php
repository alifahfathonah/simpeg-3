<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIMPEG YPPK</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{ asset('AdminLTE-2.3.0/bootstrap/css/bootstrap.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('AdminLTE-2.3.0/dist/css/AdminLTE.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('AdminLTE-2.3.0/dist/css/skins/_all-skins.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('AdminLTE-2.3.0/plugins/iCheck/flat/blue.css') }}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{ asset('AdminLTE-2.3.0/plugins/morris/morris.css') }}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ asset('AdminLTE-2.3.0/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ asset('AdminLTE-2.3.0/plugins/datepicker/datepicker3.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('AdminLTE-2.3.0/plugins/daterangepicker/daterangepicker-bs3.css') }}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ asset('AdminLTE-2.3.0/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

   <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="." class="navbar-brand"><b>SIMPEG </b>KMS YPPK</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="<?php if ($menu == "dashboard") { echo "active";} ?>"><a href="."><i class="fa fa-home fa-fw"></i> HOME <span class="sr-only">(current)</span></a></li>
            <li class="<?php if ($menu == "profil") { echo "active";} ?>"><a href="profil"><i class="fa fa-user fa-fw"></i> PROFIL</a></li>
            <li class="<?php if ($menu == "galeri") { echo "active";} ?>"><a href="galeri"><i class="fa fa-image fa-fw"></i> GALERI</a></li>
			
          </ul>
        
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            
          
		
			<li class=" dropdown user user-menu">
            <a href="login" class="dropdown-toggle" >
              <i class="fa fa-key fa-fw" ></i>LOGIN
            </a>
            
          </li>
		  
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
    

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        
        <section class="content" >
            @yield('content')
        </section>
        
    </div><!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version 1.0</b>         </div>
        <strong>Copyright &copy; 2017 SIMPEG KMS YPPK</a>.</strong> All rights reserved.
    </footer>

   
</div><!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
<script src="{{ asset('AdminLTE-2.3.0/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 3.3.5 -->
<script src="{{ asset('AdminLTE-2.3.0/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- Morris.js charts -->
<script src="{{ asset('AdminLTE-2.3.0/plugins/morris/morris.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('AdminLTE-2.3.0/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ asset('AdminLTE-2.3.0/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('AdminLTE-2.3.0/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('AdminLTE-2.3.0/plugins/knob/jquery.knob.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('AdminLTE-2.3.0/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ asset('AdminLTE-2.3.0/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('AdminLTE-2.3.0/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ asset('AdminLTE-2.3.0/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('AdminLTE-2.3.0/plugins/fastclick/fastclick.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('AdminLTE-2.3.0/dist/js/app.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('AdminLTE-2.3.0/dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('AdminLTE-2.3.0/dist/js/demo.js') }}"></script>


<!-- opsi_cari -->
<script >
function opsi_cari() {
    var x = document.getElementById("opsi").value;
    if (x == "nama_Pegawai") { 
		document.getElementById("Pegawai").disabled = false;
		document.getElementById("Pegawai").style.display = "block";
		document.getElementById("nama_sekolah").style.display = "none";
		document.getElementById("nama_sekolah").disabled = true;
		document.getElementById("Pegawai").placeholder = "Ketik Nama Pegawai yang diinginkan";
		document.getElementById("cari").disabled = false;
		
	} else if (x == "sekolah") {
		document.getElementById("Pegawai").style.display = "none";
		document.getElementById("nama_sekolah").style.display = "block";
		document.getElementById("nama_sekolah").disabled = false;
		document.getElementById("Pegawai").disabled = true;
		document.getElementById("cari").disabled = false;
	
	} else if (x == "") {
		document.getElementById("Pegawai").disabled = true;
		document.getElementById("nama_sekolah").disabled = true;
		document.getElementById("Pegawai").placeholder = "Pilih Opsi Dulu";
		document.getElementById("Pegawai").value = "";
		document.getElementById("nama_sekolah").style.display = "none";
		document.getElementById("Pegawai").style.display = "block";
		document.getElementById("cari").disabled = true;
		document.getElementById("Pegawai").type = "text";
	} 	
}		
</script>	
</body>
</html>
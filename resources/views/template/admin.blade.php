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
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini">YPPK</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>SIMPEG </b>YPPK</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            
              
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown" style="padding-right:10px">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }}&nbsp;&nbsp;<i class="fa fa-user"></i> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
										 <a href="{{ route('password') }}">
                                            Ganti Password
                                        </a>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
								 
                            </li>
                       
                    </ul>
               
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
		  <!-- Sidebar user panel -->
      <!-- Sidebar user panel -->
      <div class="user-panel garis-user" style="">
        <div class="kotak">
          <div >
		  <i class="fa fa-user" style=""></i>
		  </div>
        </div>
        <div  class="nama ">
          <p class="no-long">{{ Auth::user()->name }}</p>
          <small class="no-long">{{ Auth::user()->level }}</small>
        </div>
      </div>
            <!-- Sidebar user panel -->
            
            <ul class="sidebar-menu">
				<li class="header text-center">MENU UTAMA</li>
                @if(Auth::user()->level == 'admin')
                <li class="treeview <?php if ($menu == "dashboard") { echo "active";} ?>">
                    <a href="{{ url('/admin')}}">
                        <i class="fa fa-dashboard"></i> <span>DASHBOARD</span></i>
                    </a>
                </li>
            <li class="treeview <?php if ($menus == "masterdata") { echo "active";} ?>">
                  <a class="soft" href="#">
					<i class="fa fa-list-alt"></i> <span>MASTER DATA</span>
					<span class="pull-right">
					  <i class="fa fa-chevron-down "></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					 <li class="<?php if ($menu == "jabatan") { echo "active";} ?>"><a href="{{ url('/admin/jabatan')}}"><i class="fa fa-fw fa-list "></i><span>Data Jabatan</span></a></li>
					 <li class="<?php if ($menu == "pangkat") { echo "active";} ?>"><a href="{{ url('/admin/pangkat')}}"><i class="fa fa-fw fa-list "></i><span>Data Pangkat</span></a></li>
					 <li class="<?php if ($menu == "status_pegawai") { echo "active";} ?>"><a href="{{ url('/admin/status_pegawai')}}"><i class="fa fa-fw fa-list "></i><span>Data Status Pegawai</span></a></li>
					 <li class="<?php if ($menu == "sekolah") { echo "active";} ?>"><a href="{{ url('/admin/data_sekolah')}}"><i class="fa fa-fw fa-list "></i><span>Data Sekolah / Instansi</span></a></li>
					 <li class="<?php if ($menu == "pegawai") { echo "active";} ?>"><a href="{{ url('/admin/data_pegawai')}}"><i class="fa fa-fw fa-list "></i><span>Data Pegawai YPPK</span></a></li>
					 <li class="<?php if ($menu == "gaji") { echo "active";} ?>"><a href="{{ url('/admin/gaji')}}"><i class="fa fa-fw fa-list "></i><span>Data Gaji Pegawai</span></a></li>
				  </ul>
            </li>
           <li class="treeview <?php if ($menus == "halaman") { echo "active";} ?>">
                  <a class="soft" href="#">
					<i class="fa fa-th-large"></i> <span>HALAMAN</span>
					<span class="pull-right">
					  <i class="fa fa-chevron-down "></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					 <li class="<?php if ($menu == "profil") { echo "active";} ?>"><a href="{{ url('/admin/profil')}}"><i class="fa fa-fw fa-th-list "></i><span>Manajemen Profil</span></a></li>
					 <li class="<?php if ($menu == "galeri") { echo "active";} ?>"><a href="{{ url('/admin/galeri')}}"><i class="fa fa-fw fa-th-list "></i><span>Manajemen Galeri</span></a></li>
				  </ul>
            </li>
            <li class="treeview <?php if ($menus == "laporan") { echo "active";} ?>">
                  <a class="soft" href="#">
					<i class="fa fa-book"></i> <span>LAPORAN</span>
					<span class="pull-right">
					  <i class="fa fa-chevron-down "></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					 <li class="<?php if ($menu == "laporandatapegawai") { echo "active";} ?>"><a href="{{ url('/admin/laporandatapegawai')}}"><i class="fa fa-fw fa-file "></i><span>Laporan Data Pegawai</span></a></li>
					 <li class="<?php if ($menu == "laporanskpegawai") { echo "active";} ?>"><a href="{{ url('/admin/laporanskpegawai')}}"><i class="fa fa-fw fa-file "></i><span>Laporan SK Pegawai</span></a></li>
					 <li class="<?php if ($menu == "laporangajipegawai") { echo "active";} ?>"><a href="{{ url('/admin/user')}}"><i class="fa fa-fw fa-file "></i><span>Laporan Gaji Pegawai</span></a></li>
				  </ul>
            </li>
           
                @endif
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        
        <section class="content">
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

<script>
    $(document).ready(function(){
      var date_input=$('input[type="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'yyyy/mm/dd',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>

<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('AdminLTE-2.3.0/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<script>
$('.textarea').wysihtml5();
</script>



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
</body>
</html>
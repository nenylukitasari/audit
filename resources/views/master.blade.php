<?php
if (!isset($_SESSION['userinfo2']))
        {
            return redirect('/login2');
        }
else {
  $userinfo = $_SESSION['userinfo2'];
  $username = $_SESSION['username'];
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title-bar')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('assets/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{url('assets/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{url('assets/bower_components/jvectormap/jquery-jvectormap.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('assets/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{url('assets/dist/css/skins/_all-skins.min.css')}}">

   <link rel="stylesheet" href="{{URL::asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{URL::asset('assets/bower_components/select2/dist/css/select2.min.css')}}">

  <!-- datepicker -->
 <link rel="stylesheet" href="{{URL::asset('assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">


  <style type="text/css">
  .styled-select {
   height: 29px;
   overflow: hidden;
   width: 240px;
  }
  .semi-square {
   -webkit-border-radius: 5px;
   -moz-border-radius: 5px;
   border-radius: 5px;
  }
  input[type="text"]:disabled{background-color:white;}
  textarea[class="form-control"]:disabled{background-color:white;}
  </style>

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


  @yield('add-css')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{url('assets/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $username; ?></span>
            </a>
            <ul class="dropdown-menu">
            <!-- User image -->
              <li class="user-header">
                <img src="{{url('assets/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">

                <p>
                  <?php echo $username; ?>
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{ route('logout2') }}" class="btn btn-default btn-flat">Logout</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{url('assets/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $username; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        @if ($_SESSION['userinfo2'] == "azkayasin2@gmail.com")
         <li><a href="{{ url('dokumen') }}"><i class="fa fa-book"></i> <span> Standar Biaya Institut</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-clone"></i>
            <span>Versi SBI</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href={{ url('tambahsbi') }}><i class="fa fa-plus-square"></i> Tambah SBI</a></li>
            <li><a href={{ url('pilihversi') }}><i class="fa fa-cog"></i> Pilih Versi</a></li>
          </ul>
        </li>
        <li><a href="{{ url('buatkda') }}"><i class="fa fa-edit"></i> <span> Buat KDA</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i>
            <span>KDA</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('kda') }}"><i class="fa fa-circle-o"></i>KDA Semua</a></li>  
            <li><a href="{{ url('kdasendiri') }}"><i class="fa fa-circle-o"></i>KDA Sendiri</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Temuan KDA</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('temuankda') }}"><i class="fa fa-circle-o"></i> Temuan Semua</a></li>
            <li><a href="{{ url('temuankdasendiri') }}"><i class="fa fa-circle-o"></i> Temuan Sendiri</a></li>
          </ul>
        </li>
        <li><a href="{{ url('templatekda') }}"><i class="fa fa-file-o"></i><span>Template KDA</span></a></li>
        <li><a href="{{ url('kdatriwulan') }}"><i class="fa fa-file-zip-o"></i> <span> Laporan KDA</span></a></li>
        @elseif ($_SESSION['userinfo2'] == "nenylukitasari@gmail.com")
         <li><a href="{{ url('dokumen') }}"><i class="fa fa-book"></i> <span> Standar Biaya Institut</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-clone"></i>
            <span>Versi SBI</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href={{ url('tambahsbi') }}><i class="fa fa-plus-square"></i> Tambah SBI</a></li>
            <li><a href={{ url('pilihversi') }}><i class="fa fa-cog"></i> Pilih Versi</a></li>
          </ul>
        </li>
        <li><a href="{{ url('buatkda') }}"><i class="fa fa-edit"></i> <span> Buat KDA</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i>
            <span>KDA</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('kda') }}"><i class="fa fa-circle-o"></i>KDA Semua</a></li>  
            <li><a href="{{ url('kdasendiri') }}"><i class="fa fa-circle-o"></i>KDA Sendiri</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Temuan KDA</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('temuankda') }}"><i class="fa fa-circle-o"></i> Temuan Semua</a></li>
            <li><a href="{{ url('temuankdasendiri') }}"><i class="fa fa-circle-o"></i> Temuan Sendiri</a></li>
          </ul>
        </li>
        <li><a href="{{ url('kdatriwulan') }}"><i class="fa fa-file-zip-o"></i> <span> Laporan KDA</span></a></li>
        @else
         <li><a href="{{ url('dokumen') }}"><i class="fa fa-book"></i> <span> Standar Biaya Institut</span></a></li>
        <li><a href="{{ url('buatkda') }}"><i class="fa fa-edit"></i> <span> Buat KDA</span></a></li>
        <li><a href="{{ url('kdasendiri') }}"><i class="fa fa-file-zip-o"></i> <span> KDA</span></a></li>
        <li><a href="{{ url('temuankdasendiri') }}"><i class="fa fa-file-zip-o"></i> <span> Temuan</span></a></li>
        @endif
      </ul>
        
        
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        @yield('title')
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        @yield('right_title')
      </ol>
    </section>
  
<!-- ./wrapper -->

  <section class="content">
    @yield('content')
  </section>
</div>

  @yield('footer')

<!-- jQuery 3 -->
<script src="{{url('assets/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{url('assets/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('assets/dist/js/adminlte.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{url('assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap  -->
<script src="{{url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{url('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- SlimScroll -->
<script src="{{url('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{url('assets/bower_components/chart.js/Chart.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{url('assets/dist/js/pages/dashboard2.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('assets/dist/js/demo.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('assets/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
@yield('add-script')
</body>
</html>

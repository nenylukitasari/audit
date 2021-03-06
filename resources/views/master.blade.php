<?php
if (!isset($_SESSION['user_id']))
        {
            return redirect('/login2');
        }
else {
  $username = $_SESSION['username'];
  $user_id = $_SESSION['user_id'];
  $picture = $_SESSION['picture'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('assets/plugins/images/favicon.png')}}">
    <title>@yield('title')</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{url('assets/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/plugins/bower_components/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    <!-- Menu CSS -->
    <link href="{{url('assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{url('assets/css/animate.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{url('assets/css/style.css')}}" rel="stylesheet">
     <!-- Form -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <!-- color CSS you can use different color css from css/colors folder -->
    <!-- We have chosen the skin-blue (default.css) for this starter
         page. However, you can choose any other skin from folder css / colors .
    -->
    <link href="{{url('assets/css/colors/custom.css')}}" id="theme" rel="stylesheet"> 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
    @yield('add-css')
</head>

<body class="fix-header">
<!-- Preloader -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
    </svg>
</div>

<div id="wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header">
            <div class="top-left-part">
                <!-- Logo -->
                <a class="logo" href="index.html">
                    <!-- Logo icon image, you can use font-icon also --><b>
                    <!--This is dark logo icon--><img src="{{url('assets/plugins/images/admin-logo.png')}}" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="{{url('assets/plugins/images/admin-logo-dark.png')}}" alt="home" class="light-logo" />
                 </b> </a>
            </div>
            <!-- /Logo -->
            <!-- /Search Bar -->
            <ul class="nav navbar-top-links navbar-right pull-right">
                <li class="dropdown">
                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="<?php echo $picture; ?>" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?php echo $username; ?></b><span class="caret"></span> </a>
                    <ul class="dropdown-menu dropdown-user animated flipInY">
                        <li>
                            <div class="dw-user-box">
                                <div class="u-img"><img src="<?php echo $picture; ?>" alt="user" /></div>
                                <div class="u-text"><h4><?php echo $username; ?></h4><p class="text-muted"><?php echo $user_id; ?></p></div>
                            </div>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('logout2') }}"><i class="fa fa-power-off"></i> Logout</a></li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                
                <!-- /.dropdown -->
            </ul>
        </div>
    </nav>

<!-- Left navbar-header -->
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav slimscrollsidebar">
        <div class="sidebar-head">
            <h3><span class="fa-fw open-close"><i class="ti-menu hidden-xs"></i><i class="ti-close visible-xs"></i></span> <span class="hide-menu">Navigation</span></h3> 
        </div>
        <ul class="nav" id="side-menu">
            {{-- //semua --}}
            <li><a href="{{ url('home') }}" class="waves-effect"><i data-icon="Z" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Dashboard</span></a> </li>
            
            <li class="devider"></li>

            <li> <a href="javascript:void(0)" class="waves-effect"><i data-icon=";" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Peraturan-Peraturan<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ url('dokumen') }}" class="waves-effect"><i data-icon="m" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Standar Biaya Institut</span></a> </li>
                    <li><a href="{{ url('peraturanlain') }}" class="waves-effect"><i data-icon="m" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Peraturan Lain</span></a> </li>
                </ul>
            </li>
            <li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="#" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Cari Data<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ url('datapegawai') }}" class="waves-effect"><i data-icon="O" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Data Pegawai</span></a> </li>
                    <li><a href="{{ url('datasbi') }}"><i data-icon="O" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Data SBI</span></a></li>
                </ul>
            </li>
            {{-- //admin atau pimpinan --}}
        @if(Auth::user()->role!=3)
            <li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="(" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">KDA<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ url('buatkda') }}" class="waves-effect"><i data-icon="<" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Buat KDA</span></a> </li>
                    <li><a href="{{ url('kda/semua') }}"><i data-icon="&#xe019;" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Hasil KDA Semua</span></a></li>
                    <li><a href="{{ url('kda/sendiri') }}"><i data-icon="&#xe019;" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Hasil KDA Sendiri</span></a></li>
                    <li><a href="{{ url('kda/perbulan') }}" class="waves-effect"><i data-icon="}" class="linea-icon linea-elaborate fa-fw"></i><span class="hide-menu">Laporan KDA Per Bulan</span></a> </li>
                    <li><a href="{{ url('kda/laporan') }}" class="waves-effect"><i data-icon="}" class="linea-icon linea-elaborate fa-fw"></i><span class="hide-menu">Laporan KDA Triwulan</span></a> </li>
                </ul>
            </li>
            <li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="H" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Temuan KDA<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ url('temuankda/semua') }}"><i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Temuan Semua</span></a></li>
                    <li><a href="{{ url('temuankda/sendiri') }}"><i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Temuan Sendiri</span></a></li>
                </ul>
            </li>
        @endif
        @if(Auth::user()->role==1)
            <li><a href="{{ url('templatekda') }}" class="waves-effect"><i data-icon="&#xe016;" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Template KDA</span></a> </li>
            <li><a href="{{ url('versisbi') }}" class="waves-effect"><i data-icon="v" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Versi SBI</span></a> </li>
            <li><a href="{{ url('users') }}" class="waves-effect"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">User Role</span></a> </li>
            <li><a href="{{ url('sumberdana') }}" class="waves-effect"><i data-icon="&#xe012" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Sumber Dana</span></a> </li>
        @endif
        @if(Auth::user()->role==3)
             <li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="(" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">KDA<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ url('buatkda') }}" class="waves-effect"><i data-icon="<" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Buat KDA</span></a> </li>
                    <li><a href="{{ url('kda/sendiri') }}" class="waves-effect"><i data-icon="(" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Hasil KDA</span></a> </li>
                </ul>
            </li>
            <li><a href="{{ url('temuankda/sendiri') }}" class="waves-effect"><i data-icon="H" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Temuan</span></a> </li>
        @endif
        </ul>
    </div>
</div>
<!-- Left navbar-header end -->
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <!-- .page title -->
            <div class="col-md-3">
                <h4 class="page-title">@yield('title')</h4> </div>
            <!-- /.page title -->
            <!-- .breadcrumb -->
            <div class="col-sm-9"> 
                <ol class="breadcrumb">
                    <li><a href="{{ url('home') }}">Home</a></li>
                    @yield('right_title')
                </ol>
            </div>
            <!-- /.breadcrumb -->
        </div>
        <!-- .row -->
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- .row -->
    </div>
    <!-- /.container-fluid -->
<footer class="footer text-center"> 2019 &copy; Kantor Audit Internal ITS </footer>
</div>
<!-- /#page-wrapper -->
</div>
<!-- jQuery -->
    <script src="{{url('assets/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{url('assets/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{url('assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{url('assets/js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{url('assets/js/waves.js')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{url('assets/js/custom.min.js')}}"></script>
    <script src="{{url('assets/plugins/bower_components/datatables/jquery.dataTables.min.js')}}"></script>
    <!--Style Switcher -->
    <script src="{{url('assets/plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>
    <!-- form -->
    <script src="{{url('assets/bower_components/select2/dist/js/select2.full.min.js')}}"></script>        
    <!-- datepicker -->
    <script src="{{asset('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <!-- Custom tab JavaScript -->
    <script src="{{asset('assets/js/cbpFWTabs.js')}}"></script>
    <script type="text/javascript">
    (function() {
        [].slice.call(document.querySelectorAll('.sttabs')).forEach(function(el) {
            new CBPFWTabs(el);
        });
    })();
    </script>
    @yield('add-script')
</body>

</html>
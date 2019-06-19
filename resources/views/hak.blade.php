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
    <title>Forbidden Error</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{url('assets/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{url('assets/css/animate.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{url('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/colors/custom.css')}}" id="theme" rel="stylesheet"> 
</head>
<body>
<!-- Preloader -->

<section id="wrapper" class="error-page">
  <div class="error-box">
    <div class="error-body text-center">
      <h1 class="text-info">403</h1>
      <h3 class="text-uppercase">Forbidden Error</h3>
      <p class="text-muted m-t-30 m-b-30 text-uppercase">Anda tidak berhak mengakses halaman ini.</p>
      <a href="{{ url('home') }}" class="btn btn-info btn-rounded waves-effect waves-light m-b-40">Back to home</a> </div>
    <footer class="footer text-center"> 2019 &copy; Kantor Audit Internal ITS </footer>
  </div>
</section>
<!-- jQuery -->
<script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="bootstrap/dist/js/bootstrap.min.js"></script>


</body>
</html>
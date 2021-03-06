<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="shortcut icon" href="{{ url('dist/img/sibrave.png') }}" type="image/x-icon">
  <title>Sibrave</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ url('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  @include('layouts.user.navbar')
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content-header')
    @yield('content')
    @yield('modal')
  </div>
  <!-- /.content-wrapper -->
  @include('layouts.user.aside')
  <!-- Main Footer -->
  @include('layouts.user.footer')
</div>
<!-- ./wrapper -->

<script src="{{ url('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ url('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('dist/js/adminlte.min.js') }}"></script>

@yield('js')
</body>
</html>
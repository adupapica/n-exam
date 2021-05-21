<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home | Territories</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ url('assets/css/css-all.min.css') }}">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('assets/css/css-adminlte.min.css') }}">

  <link rel="stylesheet" href="{{ url('datatables/css/css-dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ url('datatables/css/css-responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ url('datatables/css/css-buttons.bootstrap4.min.css') }}">

  <style>
    ul,
    #myUL {
        list-style-type: none;
    }

    #myUL {
        margin: 0;
        padding: 0;
    }

    .caret {
        cursor: pointer;
        -webkit-user-select: none;
        /* Safari 3.1+ */
        -moz-user-select: none;
        /* Firefox 2+ */
        -ms-user-select: none;
        /* IE 10+ */
        user-select: none;
    }

    .caret::before {
        content: "\25B6";
        color: black;
        display: inline-block;
        margin-right: 6px;
    }

    .caret-down::before {
        -ms-transform: rotate(90deg);
        /* IE 9 */
        -webkit-transform: rotate(90deg);
        /* Safari */
        '
transform: rotate(90deg);
    }

    .nested {
        display: none;
    }

    .active {
        display: block;
        padding-left: 3rem;
    }
</style>


</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
     
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="{{ url('account/logout', []) }}" role="button">
          <i class="fas fa-sign-out-alt" title="log out"></i>
        </a>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
      {{-- <img src="{{url("assets/images/img-AdminLTELogo.png")}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
      <span class="brand-text font-weight-light">Welcome , {{ Session::get('user')->displayName }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    
      <!-- Sidebar Menu -->
      <nav class="mt-3">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item @if (Request::is('admin/dashboard')) active @endif">
            <a href="widgets.html" class="nav-link @if (Request::is('admin/dashboard')) active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Home
              </p>
            </a>
          </li>
      
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->


</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ url("assets/js/jquery-jquery.min.js")}}"></script>
<!-- Bootstrap -->
<script src="{{ url("assets/js/js-bootstrap.bundle.min.js")}}"></script>
<!-- AdminLTE -->
<script src="{{ url("assets/js/js-adminlte.js")}}"></script>


</body>
</html>

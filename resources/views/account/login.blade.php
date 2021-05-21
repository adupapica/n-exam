<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>


  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url("alert/css/css-all.min.css")}}">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="{{url("alert/css/sweetalert2-theme-bootstrap-4-bootstrap-4.min.css")}}">
  <!-- Toastr -->
  <link rel="stylesheet" href="{{url("alert/css/toastr-toastr.min.css")}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url("alert/css/css-adminlte.min.css")}}">
</head>
<body class="hold-transition login-page">

<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="{{ url('account/login', []) }}" class="h1"><b>Login</a>
    </div>
    <div class="card-body">

      <form action="{{ url('account/login', []) }}" method="POST">
        @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username" value="{{ old('username') }}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
            
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>



       
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
<!-- jQuery -->
<script src="{{ url("alert/js/jquery-jquery.min.js")}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ url("alert/js/js-bootstrap.bundle.min.js")}}"></script>
<!-- SweetAlert2 -->
<script src="{{ url("alert/js/sweetalert2-sweetalert2.min.js")}}"></script>
<!-- Toastr -->
<script src="{{ url("alert/js/toastr-toastr.min.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{ url("alert/js/js-adminlte.min.js")}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url("alert/js/js-demo.js")}}"></script>
<!-- Page specific script -->


@if(Session::has('error'))

<script>
  $(function() {
  var Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
  });

toastr.error('{{Session::get('error')}}');

  });
</script>
@endif

@if(Session::has('success'))

<script>
  $(function() {
  var Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
  });

toastr.success('{{Session::get('success')}}');

  });
</script>
@endif


</body>
</html>

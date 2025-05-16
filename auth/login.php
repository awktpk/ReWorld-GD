<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GDPSFH Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3257705067704579" crossorigin="anonymous"></script>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>GDPS</b>FH</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in</p>

      <form action="#" method="post">
        <div class="social-auth-links text-center mt-2 mb-3">
          <a id="submit" class="btn btn-block btn-primary">
            <i class="fab fa-discord mr-2"></i> Sign in using Discord
          </a>
        </div>
      </form>
      <!-- /.social-auth-links -->
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

<script src="../plugins/sweetalert2/sweetalert2.all.min.js"></script>
<script src="../plugins/toastr/toastr.min.js"></script>

<script type="text/javascript">
    $('#submit').click(function() {
      window.location.href = "https://discord.com/oauth2/authorize?client_id=1372955015668564151&response_type=code&redirect_uri=http%3A%2F%2Fnode1.worldplayer.ru%3A27011%2Fauth%2Fauth.php&scope=identify+guilds+guilds.join";
    });
</script>

</body>
</html>

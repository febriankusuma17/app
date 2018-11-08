<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="Login dengan akun anda" content="">
    <meta name="febrian" content="">

    <title>Silahkan Login Dengan Username dan Password anda</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?>" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/css/sb-admin.css') ?>" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
          <form>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                <label for="inputEmail">Alamat Email</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Ingat Password
                </label>
              </div>
            </div>
            <a class="btn btn-primary btn-block" href="index.html">Login</a>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="register.html">Buat akun</a>
            <a class="d-block small" href="forgot-password.html">Lupa Password</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <link href="<?php echo base_url('assets/jquery/jquery.min.js') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>" rel="stylesheet">

    <!-- Core plugin JavaScript-->
    <link href="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js') ?>" rel="stylesheet">

  </body>

</html>

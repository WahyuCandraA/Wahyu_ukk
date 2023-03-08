<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>
    <?= $judul ?>
  </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('vendor/adminlte/') ?>plugins/fontawesome-free/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('vendor/adminlte/') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('vendor/adminlte/') ?>dist/css/adminlte.css">
  <link rel="shortcut icon" href="<?= base_url('new_template/') ?>assets/images/Logo1.png" type="image/x-icon">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <style>
    .login {
      background-image: url(assets/img/logo2.jpg);
      background-repeat: no-repeat;
      background-size: 99%;
    } 
  </style>
</head>

<body class="hold-transition login-page login">
  <div class="login-box">
    <div class="login-logo">
      <a><b style="color: black;">Laundry Login</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body bg-blue">
        <p class="login-box-msg">Masukkan Username Dan Password Anda</p>

        <?php if ($error = $this->session->flashdata('error')): ?>

          <div class="alert alert-danger">
            <strong>Perhatian</strong>
            <p>
              <?php echo $error ?>
            </p>
          </div>
        <?php endif; ?>

        <form method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" name="username" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span style="color: black;" class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span style="color: black;" class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">

            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-dark btn-block">Login</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="<?= base_url('vendor/adminlte/') ?>plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('vendor/adminlte/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('vendor/adminlte/') ?>dist/js/adminlte.min.js"></script>

</body>

</html>
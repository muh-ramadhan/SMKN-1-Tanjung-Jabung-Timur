<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url(); ?>/themplate/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url(); ?>/themplate/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>/themplate/dist/css/adminlte.min.css">
</head>

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="<?= base_url(); ?>/themplate/index2.html" class="h1"><b>Admin</b>LTE</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Login</p>



        <?php $errors = session()->getFlashdata('errors');
        //Pesan Validasi Error
        if (!empty($errors)) { ?>
          <?php foreach ($errors as $error) : ?>
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <?= esc($error); ?>
            </div>
          <?php endforeach ?>
        <?php } ?>
        
        <?php
        if (session()->getFlashdata('pesan')) {
          echo '<div class="alert alert-success alert-dismissible">';
          echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>';
          echo session()->getFlashdata('pesan');
          echo '</div>';
        }; ?>

        <?php
        echo form_open('login/auth');
        ?>
        <?= csrf_field() ?>
        <div class="input-group mb-3">
          <input name="nama_pengguna" type="text" class="form-control" placeholder="Nama Pengguna">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="kata_sandi" type="password" class="form-control" placeholder="Katta Sandi">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
                I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
        <?php echo form_close(); ?>

        <a href="<?= base_url('register');?>" class="text-center">Belum Punya Akun? Buat Akun</a>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->

  <!-- jQuery -->
  <script src="<?= base_url(); ?>/themplate/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url(); ?>/themplate/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url(); ?>/themplate/dist/js/adminlte.min.js"></script>
</body>

</html>
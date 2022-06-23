<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Buat Akun</title>

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
  <?php if (isset($StatusTahunAjaran['status']) == 1) { ?>
    <div class="register-box">
      <div class="card card-outline card-primary">
        <div class="card-header text-center">
          <a href="<?= base_url(); ?>/themplate/index2.html" class="h1"><b>Admin</b>LTE</a>
        </div>
        <div class="card-body">
          <?php $errors = session()->getFlashdata('errors'); ?>

          <?php
          if (session()->getFlashdata('pesan')) {
            echo '<div class="alert alert-success alert-dismissible">';
            echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>';
            echo session()->getFlashdata('pesan');
            echo '</div>';
          }; ?>

          <?php echo form_open('register/auth'); ?>
          <?= csrf_field() ?>

          <div class="input-group mb-3">
            <select name="id_jalur_masuk" class="form-control <?= $validation->hasError('id_jalur_masuk') ? 'is-invalid' : null; ?>" required>
              <option value="">-- Pilih Jalur Masuk --</option>
              <?php foreach ($AmbilSemuaDataJalurMasuk as $key => $value) {; ?>
                <option value="<?= $value['id_jalur_masuk']; ?>" <?= old('id_jalur_masuk') == $value['id_jalur_masuk'] ? 'selected' : null ?>><?= $value['nama_jalur_masuk']; ?></option>
              <?php }; ?>
            </select>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
            <span class="error invalid-feedback" style="display: inline;">
              <?= $validation->getError('id_jalur_masuk') ?>
            </span>
          </div>

          <div class="input-group mb-3">
            <select name="id_jurusan" class="form-control <?= $validation->hasError('id_jurusan') ? 'is-invalid' : null; ?>" required>
              <option value="">-- Pilih Jurusan --</option>
              <?php foreach ($AmbilSemuaDataJurusan as $key => $value) {; ?>
                <option value="<?= $value['id_jurusan']; ?>" <?= old('id_jurusan') == $value['id_jurusan'] ? 'selected' : null ?>><?= $value['nama_jurusan']; ?></option>
              <?php }; ?>
            </select>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
            <span class="error invalid-feedback" style="display: inline;">
              <?= $validation->getError('id_jurusan') ?>
            </span>
          </div>

          <div class="input-group mb-3">
            <input name="nisn" value="<?= old('nisn') ?>" type="text" class="form-control <?= $validation->hasError('nisn') ? 'is-invalid' : null; ?>" placeholder="NISN" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
            <span class="error invalid-feedback" style="display: inline;">
              <?= $validation->getError('nisn') ?>
            </span>
          </div>

          <div class="input-group mb-3">
            <input name="nama_lengkap_pesertadidik" value="<?= old('nama_lengkap_pesertadidik') ?>" type="text" class="form-control <?= $validation->hasError('nama_lengkap_pesertadidik') ? 'is-invalid' : null; ?>" placeholder="Nama Lengkap" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
            <span class="error invalid-feedback" style="display: inline;">
              <?= $validation->getError('nama_lengkap_pesertadidik') ?>
            </span>
          </div>


          <div class="input-group mb-3">
            <select name="jenis_kelamin" class="form-control <?= $validation->hasError('jenis_kelamin') ? 'is-invalid' : null; ?>" required>
              <option value="">-- Pilih Jenis Kelamin --</option>
              <option value="L" <?= old('jenis_kelamin') == 'L' ? 'selected' : null ?>>Laki-Laki</option>
              <option value="P" <?= old('jenis_kelamin') == 'P' ? 'selected' : null ?>>Perempuan</option>
            </select>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
            <span class="error invalid-feedback" style="display: inline;">
              <?= $validation->getError('jenis_kelamin') ?>
            </span>
          </div>

          <div class="input-group mb-3">
            <input name="tempat_lahir_pesertadidik" value="<?= old('tempat_lahir_pesertadidik') ?>" type="text" class="form-control <?= $validation->hasError('tempat_lahir_pesertadidik') ? 'is-invalid' : null; ?>" placeholder="Tempat Lahir" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
            <span class="error invalid-feedback" style="display: inline;">
              <?= $validation->getError('tempat_lahir_pesertadidik') ?>
            </span>
          </div>

          <div class="input-group mb-3">
            <select name="tanggal" class="form-control <?= $validation->hasError('tanggal') ? 'is-invalid' : null; ?>" required>
              <option value="">-- Tanggal Lahir --</option>
              <?php
              for ($i = 01; $i <= 31; $i++) { ?>
                <option value="<?= $i ?>" <?= old('tanggal') == $i ? 'selected' : null ?>><?= $i ?></option>;
              <?php  } ?>
            </select>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
            <span class="error invalid-feedback" style="display: inline;">
              <?= $validation->getError('tanggal') ?>
            </span>
          </div>

          <div class="input-group mb-3">
            <select name="bulan" class="form-control <?= $validation->hasError('bulan') ? 'is-invalid' : null; ?>" required>
              <option value="">-- Bulan Lahir --</option>
              <?php
              for ($i = 01; $i <= 12; $i++) { ?>
                <option value="<?= $i ?>" <?= old('bulan') == $i ? 'selected' : null ?>><?= $i ?></option>;
              <?php  } ?>
            </select>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
            <span class="error invalid-feedback" style="display: inline;">
              <?= $validation->getError('bulan') ?>
            </span>
          </div>

          <div class="input-group mb-3">
            <select name="tahun" class="form-control <?= $validation->hasError('tahun') ? 'is-invalid' : null; ?>" required>
              <option value="">-- Tahun Lahir --</option>
              <?php $now = date('Y');
              for ($i = 2005; $i <= $now; $i++) { ?>
                <option value="<?= $i ?>" <?= old('tahun') == $i ? 'selected' : null ?>><?= $i ?></option>;
              <?php  } ?>
            </select>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
            <span class="error invalid-feedback" style="display: inline;">
              <?= $validation->getError('tahun') ?>
            </span>
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
              <button type="submit" class="btn btn-primary btn-block">Buat Akun</button>
            </div>
            <!-- /.col -->
          </div>
          <?php echo form_close(); ?>

          <a href="<?= base_url('Login')?>" class="text-center">I already have a membership</a>
        </div>
        <!-- /.form-box -->
      </div><!-- /.card -->
    </div>
    <!-- /.register-box -->
  <?php } else { ?>
    <div class="col-sm-12">
      <div class="alert alert-warning alert-dismissible">
        <h5><i class="icon fas fa-exclamation-triangle"></i> Pemberitahuan!</h5>
        Maaf, Pendaftaran Sudah Ditutup. Anda Tidak Dapat Melakukan Pendaftaran !!!
      </div>
    </div>
  <?php } ?>

  <!-- jQuery -->
  <script src="<?= base_url(); ?>/themplate/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url(); ?>/themplate/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url(); ?>/themplate/dist/js/adminlte.min.js"></script>
</body>

</html>
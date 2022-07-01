<?= $this->extend('superadmin/themplate/layout') ?>
<?= $this->section('content') ?>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <?php
                if (session()->getFlashdata('tambah')) {
                    echo '
                    <div class="toasts-top-right fixed">
                        <div class="toast bg-success" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
                            <div class="toast-header">
                                <i class="mr-2 fas fa-check fa-lg"></i>
                                <strong class="mr-auto">Berhasil</strong>
                                <button data-dismiss="toast" type="button" class="ml-2 mb-1 close" aria-label="Close">
                                <span aria-hidden="true">×</span>
                                </button>
                            </div>
                        <div class="toast-body">';
                    echo session()->getFlashdata('tambah');
                    echo '</div></div></div>';
                }

                if (session()->getFlashdata('ubah')) {
                    echo '
                    <div class="toasts-top-right fixed">
                        <div class="toast bg-success" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
                            <div class="toast-header">
                                <i class="mr-2 fas fa-check fa-lg"></i>
                                <strong class="mr-auto">Berhasil</strong>
                                <button data-dismiss="toast" type="button" class="ml-2 mb-1 close" aria-label="Close">
                                <span aria-hidden="true">×</span>
                                </button>
                            </div>
                        <div class="toast-body">';
                    echo session()->getFlashdata('ubah');
                    echo '</div></div></div>';
                }

                if (session()->getFlashdata('hapus')) {
                    echo '
                    <div class="toasts-top-right fixed">
                        <div class="toast bg-success" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
                            <div class="toast-header">
                                <i class="mr-2 fas fa-check fa-lg"></i>
                                <strong class="mr-auto">Berhasil</strong>
                                <button data-dismiss="toast" type="button" class="ml-2 mb-1 close" aria-label="Close">
                                <span aria-hidden="true">×</span>
                                </button>
                            </div>
                        <div class="toast-body">';
                    echo session()->getFlashdata('hapus');
                    echo '</div></div></div>';
                }
                ?>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><?= $title; ?> <?= $subtitle; ?></h3>
                        <div class="card-tools">
                            <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah">
                                <i class="fas fa-plus"></i> Tambah
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama <?= $subtitle; ?></th>
                                    <th>Mata Pelajaran</th>
                                    <th>Kelas</th>
                                    <th>Pilihan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($AmbilSemuaDataGuru as $key => $value) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $value['nama_lengkap_guru'] ?></td>
                                        <td><?= $value['id_matapelajaran'] ?></td>
                                        <td><?= $value['id_kelas'] ?></td>
                                        <td>
                                            <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#ubah<?= $value['id_guru'] ?>">
                                                <i class="fas fa-edit"></i> Ubah
                                            </button>
                                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus<?= $value['id_guru'] ?>">
                                                <i class="fas fa-trash"></i> Hapus
                                            </button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama <?= $subtitle; ?></th>
                                    <th>Mata Pelajaran</th>
                                    <th>Kelas</th>
                                    <th>Pilihan</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal Tambah -->
<div class="modal fade" id="tambah">
    <div class="modal-dialog" style="max-width: 80%;">
        <div class="modal-content">
            <div class="card card-default">

                <?php echo form_open('Superadmin/TambahDataGuru') ?>
                <?= csrf_field() ?>
                <div class="modal-header">
                    <h4 class="modal-title">Tambah <?= $subtitle; ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Batal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="input-group mb-3">
                                <select name="jenis_kelamin_guru" class="form-control <?= $validation->hasError('jenis_kelamin_guru') ? 'is-invalid' : null; ?>" required>
                                    <option value="">-- Pilih Jenis Kelamin --</option>
                                    <option value="L" <?= old('jenis_kelamin_guru') == 'L' ? 'selected' : null ?>>Laki-Laki</option>
                                    <option value="P" <?= old('jenis_kelamin_guru') == 'P' ? 'selected' : null ?>>Perempuan</option>
                                </select>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                                <span class="error invalid-feedback" style="display: inline;">
                                    <?= $validation->getError('jenis_kelamin_guru') ?>
                                </span>
                            </div>

                            <div class="input-group mb-3">
                                <input name="nama_lengkap_guru" value="<?= old('nama_lengkap_guru') ?>" type="text" class="form-control <?= $validation->hasError('nama_lengkap_guru') ? 'is-invalid' : null; ?>" placeholder="Tempat Lahir">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                                <span class="error invalid-feedback" style="display: inline;">
                                    <?= $validation->getError('nama_lengkap_guru') ?>
                                </span>
                            </div>

                            <div class="input-group mb-3">
                                <input name="rfid" value="<?= old('rfid') ?>" type="text" class="form-control <?= $validation->hasError('rfid') ? 'is-invalid' : null; ?>" placeholder="Tempat Lahir">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                                <span class="error invalid-feedback" style="display: inline;">
                                    <?= $validation->getError('rfid') ?>
                                </span>
                            </div>
                        </div>

                        <div class="col-md-6">


                            <div class="input-group mb-3">
                                <input name="nip_guru" value="<?= old('nip_guru') ?>" type="text" class="form-control <?= $validation->hasError('nip_guru') ? 'is-invalid' : null; ?>" placeholder="Tempat Lahir">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                                <span class="error invalid-feedback" style="display: inline;">
                                    <?= $validation->getError('nip_guru') ?>
                                </span>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-danger btn-sm" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>
<!-- ./Modal Tambah -->

<!-- Modal Ubah -->
<?php foreach ($AmbilSemuaDataGuru as $key => $value) { ?>
    <div class="modal fade" id="ubah<?= $value['id_guru'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Ubah <?= $subtitle; ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Batal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php echo form_open('Superadmin/UbahDataGuru/' . $value['id_guru']) ?>
                <?= csrf_field() ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama <?= $subtitle; ?></label>
                        <input name="nama_lengkap_guru" value="<?= $value['nama_lengkap_guru'] ?>" class="form-control" placeholder="Nama Peserta Didik" required>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-danger btn-sm" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
<?php } ?>
<!-- ./Modal Ubah -->

<!-- Modal Hapus -->
<?php foreach ($AmbilSemuaDataGuru as $key => $value) { ?>
    <div class="modal fade" id="hapus<?= $value['id_guru'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Hapus <?= $subtitle; ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Batal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda Ingin Menghapus <b><?= $subtitle; ?> <?= $value['nama_lengkap_guru'] ?></b> ?
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-danger btn-sm" data-dismiss="modal">Batal</button>
                    <a href="<?= base_url('superadmin/HapusDataGuru/' . $value['id_guru']) ?>" class="btn btn-primary btn-sm">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- ./Modal Hapus -->
<?= $this->endSection() ?>
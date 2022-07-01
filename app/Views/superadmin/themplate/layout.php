<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | <?= $title; ?></title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>/themplate/plugins/fontawesome-free/css/all.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url(); ?>/themplate/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url(); ?>/themplate/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url(); ?>/themplate/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>/themplate/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url(); ?>/themplate/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url(); ?>/themplate/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url(); ?>/themplate/plugins/summernote/summernote-bs4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url(); ?>/themplate/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/themplate/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/themplate/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= base_url(); ?>/themplate/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?= base_url(); ?>/themplate/plugins/toastr/toastr.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Wrapper -->
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?= base_url(); ?>/themplate/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>
        <!-- ./Preloader -->

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>
            <!-- ./Left navbar -->

            <!-- Right navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <img src="<?= base_url(); ?>/themplate/dist/img/user2-160x160.jpg" class="user-image img-circle elevation-2" alt="User Image">
                        <span class="d-none d-md-inline">NAMA</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <!-- User image -->
                        <li class="user-header bg-primary">
                            <img src="<?= base_url(); ?>/themplate/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                            <p>
                                NAMA PERTAMA
                                <small>
                                    NAMA KEDUA
                                </small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="row">
                                <div class="col-4 text-center">
                                    <a href="#">Followers</a>
                                </div>
                                <div class="col-4 text-center">
                                    <a href="#">Sales</a>
                                </div>
                                <div class="col-4 text-center">
                                    <a href="#">Friends</a>
                                </div>
                            </div>
                            <!-- /.row -->
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <a href="#" class="btn btn-info btn-flat">Profile</a>
                            <a href="<?= base_url('logout'); ?>" class="btn btn-danger btn-flat float-right">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- ./Right navbar -->
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?= base_url('superadmin'); ?>" class="brand-link">
                <img src="<?= base_url(); ?>/themplate/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Dalonet</span>
            </a>
            <!-- /.Brand Logo -->

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- SidebarSearch Form -->
                <div class="form-inline mt-2">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- /.SidebarSearch Form -->

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="<?= base_url('superadmin'); ?>" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Beranda
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Master Data
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Administrator</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('Superadmin/Guru'); ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Guru</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tata Usaha</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('Superadmin/Pesertadidik'); ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Peserta Didik</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('Superadmin/Jurusan'); ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Jurusan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('Superadmin/Pekerjaan'); ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pekerjaan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('Superadmin/Pendidikan'); ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pendidikan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('Superadmin/Penghasilan'); ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Penghasilan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('Superadmin/Agama'); ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Agama</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('Superadmin/Pembayaran'); ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pembayaran</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('Superadmin/Kelas'); ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Kelas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('Superadmin/MataPelajaran'); ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Mata Pelajaran</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- ./Main Sidebar Container -->

        <!-- Content Wrapper -->
        <div class="content-wrapper">

            <!-- Content Header -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"><?= $title; ?></h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
                                <li class="breadcrumb-item active"><?= $subtitle; ?></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.Content Header -->

            <!-- Main content -->
            <?= $this->renderSection('content') ?>
            <!-- /.Main content -->

        </div>
        <!-- /.Content Wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2016-2022 Dalonet</strong>
            <div class="float-right d-none d-sm-inline-block">
                <b>CodeIgniter</b> 4.2.0 | <b>AdminLTE</b> 3.2.0
            </div>
        </footer>
        <!-- ./Main Footer -->

    </div>
    <!-- ./Wrapper -->

    <!-- jQuery -->
    <script src="<?= base_url(); ?>/themplate/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= base_url(); ?>/themplate/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url(); ?>/themplate/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?= base_url(); ?>/themplate/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?= base_url(); ?>/themplate/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="<?= base_url(); ?>/themplate/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?= base_url(); ?>/themplate/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?= base_url(); ?>/themplate/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?= base_url(); ?>/themplate/plugins/moment/moment.min.js"></script>
    <script src="<?= base_url(); ?>/themplate/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?= base_url(); ?>/themplate/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?= base_url(); ?>/themplate/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url(); ?>/themplate/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url(); ?>/themplate/dist/js/adminlte.js"></script>
    <!-- SweetAlert2 -->
    <script src="<?= base_url(); ?>/themplate/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="<?= base_url(); ?>/themplate/plugins/toastr/toastr.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?= base_url(); ?>/themplate/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>/themplate/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url(); ?>/themplate/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url(); ?>/themplate/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url(); ?>/themplate/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url(); ?>/themplate/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url(); ?>/themplate/plugins/jszip/jszip.min.js"></script>
    <script src="<?= base_url(); ?>/themplate/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url(); ?>/themplate/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url(); ?>/themplate/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url(); ?>/themplate/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url(); ?>/themplate/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

    <!-- Toast -->
    <script>
        $('.toast').toast('show')
    </script>
</body>

</html>
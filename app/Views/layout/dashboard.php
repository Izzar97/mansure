<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Mansure | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="<?= base_url('assets') ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/summernote/summernote-bs4.min.css">
</head>

<style>
span {
    color: gray;
}

.modal-header {
    justify-content: normal;
}

.form-group {
    margin: 0px;
    float: right;
}

select {
    border-radius: 5px;
}

.card-body {
    padding: 10px;
}
</style>

<body class="hold-transition sidebar-mini layout-fixed">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake"
                src="https://d1fdloi71mui9q.cloudfront.net/CkC5B6RQdO4LhYtECNCw_iPJoJ2krt3AvQh2v" alt="Logo" height="60"
                width="60">
        </div>

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
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search-alt"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('logout-pelayan') ?>" class="button" style="padding: 8px;">Logout <i
                            class="fas fa-sign-out-alt"></i></a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class=" main-sidebar sidebar-light-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="https://d1fdloi71mui9q.cloudfront.net/CkC5B6RQdO4LhYtECNCw_iPJoJ2krt3AvQh2v" alt="Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-dark">Dashboard</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <?php if(session()->get('jabatan') == 'admin') {?>
                            <li class="nav-item">
                                <a href="<?= base_url('dashboard/') ?>" class="nav-link">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Dashboard
                                    </p>
                                </a>
                            </li>
                        <?php } ?> 

                        <?php if(session()->get('jabatan') == 'chef') {?>
                            <li class="nav-item">
                                <a href="<?= base_url('dashboard/koki') ?>" class="nav-link">
                                    <i class="nav-icon fas fa-utensils"></i>
                                    <p>
                                        Koki
                                    </p>
                                </a>
                            </li>
                        <?php }?>

                        <?php if(session()->get('jabatan') == 'admin') {?>

                            <li class="nav-item">
                                <a href="<?= base_url('dashboard/home-kasir') ?>" class="nav-link">
                                    <i class="nav-icon fas fa-list"></i>
                                    <p>Daftar Menu</p>
                                </a>
                            </li>
                        <?php }?>

                        <?php if(session()->get('jabatan') == 'kasir') {?>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-cash-register"></i>
                                    <p>
                                        Kasir
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?= base_url('dashboard/transaksi') ?>" class="nav-link">
                                            <i class="nav-icon fas fa-credit-card"></i>
                                            <p>Transaksi</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?= base_url('dashboard/laporan') ?>" class="nav-link">
                                            <i class="nav-icon fas fa-file-alt"></i>
                                            <!-- <i class="fa-sharp fa-solid fa-file"></i> -->
                                            <p>
                                                Laporan
                                                <!-- <span class="badge badge-info right">2</span> -->
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php }?>

                        <!-- ini fitur admin -->
                        <?php if(session()->get('jabatan') == 'admin') {?>
                            <li class="nav-item">
                                <a href="<?= base_url('dashboard/koki') ?>" class="nav-link">
                                    <i class="nav-icon fas fa-utensils"></i>
                                    <p>
                                        Koki
                                    </p>
                                </a>
                            </li>
                        <?php }?>

                        <?php if(session()->get('jabatan') == 'admin') {?>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-cash-register"></i>
                                    <p>
                                        Kasir
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?= base_url('dashboard/transaksi') ?>" class="nav-link">
                                            <i class="nav-icon fas fa-credit-card"></i>
                                            <p>Transaksi</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php }?>

                        <?php if(session()->get('jabatan') == 'admin') {?>
                            <li class="nav-header">OTHERS</li>
                            <li class="nav-item">
                                <a href="<?= base_url('dashboard/laporan') ?>" class="nav-link">
                                    <i class="nav-icon fas fa-file-alt"></i>
                                    <!-- <i class="fa-sharp fa-solid fa-file"></i> -->
                                    <p>
                                        Laporan
                                        <!-- <span class="badge badge-info right">2</span> -->
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('dashboard/tambah-user') ?>" class="nav-link">
                                    <i class="nav-icon fas fa-user-plus"></i>
                                    <!-- <i class="fa-sharp fa-solid fa-file"></i> -->
                                    <p>
                                        Users
                                        <!-- <span class="badge badge-info right">2</span> -->
                                    </p>
                                </a>
                            </li>
                        <?php } ?>
                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Users
                                </p>
                            </a>

                        </li> -->
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer> -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?= base_url('assets') ?>/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= base_url('assets') ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('assets') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?= base_url('assets') ?>/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?= base_url('assets') ?>/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="<?= base_url('assets') ?>/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?= base_url('assets') ?>/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?= base_url('assets') ?>/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?= base_url('assets') ?>/plugins/moment/moment.min.js"></script>
    <script src="<?= base_url('assets') ?>/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?= base_url('assets') ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
    </script>
    <!-- Summernote -->
    <script src="<?= base_url('assets') ?>/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url('assets') ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets') ?>/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url('assets') ?>/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?= base_url('assets') ?>/dist/js/pages/dashboard.js"></script>
</body>

</html>
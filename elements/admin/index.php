<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
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
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index.php" class="nav-link">Home</a>
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
                    <div id="logout">
                        <a class="nav-link" href="../user/userAct.php?req=logout">
                            <img src="../img/logout.png" class="iconlogout" style="width: 25px; height: 25px;">
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index.php" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Admin</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../img/thanhNiemicon.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="index.php" class="d-block">Thanh Niềm</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="./index.php" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <!-- From -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Forms
                                    <i class="fas fa-angle-right right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <!-- User -->
                                    <a href="index.php?req=userAdd" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add New User</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <!-- Hãng Xe -->
                                    <a href="index.php?req=car_companyAdd" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add New Car Company</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <!-- Loại Xe -->
                                    <a href="index.php?req=type_of_carAdd" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add New Type Of Car</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <!-- Xe -->
                                    <a href="index.php?req=carAdd" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add New Car</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Table -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Tables
                                    <i class="fas fa-angle-right right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <!-- User -->
                                    <a href="index.php?req=userTable" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Users Table</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <!-- Hãng Xe -->
                                    <a href="index.php?req=car_companyTable" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Car Companys Table</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <!-- Loại Xe -->
                                    <a href="index.php?req=type_of_carTable" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Type Of Cars Table</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <!-- Xe -->
                                    <a href="index.php?req=carTable" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cars Table</p>
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

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <div class="main-content">
                <ul>
                    <div class="main-content-center">
                        <?php
                        require './content.php';
                        ?>
                    </div>
                </ul>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2023 <a href="https://www.facebook.com/tran.utran.5/">Thanh Niềm</a>.</strong>
            Đại Học Tây Đô.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
</body>

</html>
<?php
  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
  session_start();
  include "../koneksi/session_member.php";
  include "../koneksi/koneksi.php";
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>BARBERSHOP ABADI II | Dashboard</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
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
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-user"></i>
          <?php $nama = $_SESSION['namalengkap']; echo "$nama"; ?>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> Account Setting
          </a>
          <a href="http://localhost/barber/karyawan/logout.php" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> Logout
          </a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="http://localhost/barber/Karyawan/" class="brand-link">
      <img src="../../dist/img/img.svg" alt="Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light" ><b>BARBERSHOP ABADI II</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
          <li class="dropdown-menum">
            <a href="/barber/Karyawan/Account" class="nav-link">
              <i class="nav-icon fa fa-envelope"></i>
              <p>
                Account
              </p>
            </a>
          </li>
          <li class="dropdown-menum">
            <a href="/barber/Karyawan/Hasil_kerja" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Hasil Kerja
              </p>
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
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Account Profil</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Account</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
          </div>
          <!-- /.col -->
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Profil</h5>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-12 col-md-8 col-sm-6">
<?php
include "../../koneksi/koneksi.php";
$getus   = mysqli_real_escape_string($con,$_SESSION['id_user']);
$sql = mysqli_query($con,"SELECT * FROM user WHERE id_user='$getus'");
    $r = mysqli_fetch_array($sql);
    echo "
    <form action='update.php' name='formku' onSubmit='return valid()' method=POST id='update'>
    <input type='hidden' name='id_us' value='$r[id_user]' >
      <fieldset>
        <div class='form-group'>
        <label>Nama Lengkap</label>
          <input id='namalengkap' name='namalengkap' type='text' style='width:100%;' value='$r[nama_lengkap]'> 
        </div>
        <div class='form-group'>
        <label>Username</label>
          <input id='usern' name='usern' type='text' style='width:100%;' value='$r[username]' disabled> 
        </div>
        <div class='form-group'>
            <label>E-mail</label>
          <input name='email1' type='email' style='width:100%;' id='email' value='$r[email]'> 
        </div>
        <div class='form-group'>
            <label>Password</label>
          <input name='passwd' type='password' style='width:100%;' id='password'> 
        </div>
        <div class='form-group'>
            <label>No HP</label>
          <input name='no_tlp' type='text' style='width:100%;' id='no_telp' value='$r[no_hp]'> 
        </div>
        <fieldset class='form-group'>     
        <label>Level</label>
        <select class='form-control' id='level' name='level'>
        <option>$r[level]</option>
        <option>admin</option>
        <option>karyawan</option>
        </select>
        <div class='form-control-position'>
        <i class='la la-key'></i>
        </div>
        </fieldset>
          <button type='submit' class='btn btn-primary'>Update</button>
      </fieldset>
    </form>";   
?>
                    <!-- /.chart-responsive -->
                  </div>
                  <!-- /.col -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    Copyright &copy; 2020 BARBERSHOP ABADI II - jl. Haur pancuh, no 125, lebak gede, kota bandung
  </footer>
</div>
<!-- ./wrapper -->
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="../dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="../plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="../plugins/raphael/raphael.min.js"></script>
<script src="../plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script type="text/javascript" src="plugins/chart.js/Chart.min.js"></script>
</body>
</html>

<?php
  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
  session_start();
  include "../../koneksi/session_admin.php";
  include "../../koneksi/koneksi.php";
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

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

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
          <a href="http://localhost/barber/Administrator/logout.php" class="dropdown-item">
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
    <a href="#" class="brand-link">
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
            <a href="/barber/Administrator/inbox.php" class="nav-link">
              <i class="nav-icon fa fa-envelope"></i>
              <p>
                Kirim Pesan
              </p>
            </a>
          </li>
          <li class="dropdown-menum">
            <a href="/barber/Administrator/user" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User
              </p>
            </a>
          </li>
        </ul>
        </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon  fas fa-dollar-sign"></i>
              <p>
                Keuangan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="/barber/Administrator/keuangan/transaksi.php" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Transaksi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/barber/Administrator/inbox.php" class="nav-link">
              <i class="nav-icon  fas fa-address-card"></i>
              <p>
                Gaji
              </p>
            </a>
          </li>
        </ul>
        </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Monitoring
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="/barber/Administrator/inbox.php" class="nav-link">
              <i class="nav-icon fas fa-book-reader "></i>
              <p>
                Laporan Print
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
            <h1 class="m-0 text-dark">Transaksi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
              <li class="breadcrumb-item active">Transaksi</li>
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
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
    <table>
      <tr>
        <td>
    <form action="" method="get" name='pktget'>
        <fieldset class="form-group">  
        <label>Jumlah Paket</label>
        <input type='text' name='jp' class="form-control">   
        </fieldset>
          <button type='submit' class='btn btn-primary' name='ok'>OK</button>
    </form>
        </td>
      </tr>
      <tr>
        <td>
    <form action="" method="POST">
        <fieldset class="form-group">     
        <label>Paket</label>
        <?php
        if(isset($_GET['jp']) && $_GET['jp'] >0){
          $jumlah_form = $_GET['jp'];
        }
        else{
          $jumlah_form = 1;
        }

        for($i=1;$i<=$jumlah_form;$i++){
        ?>
        <select class="form-control" name="paket[]">
        <option>Potong Rambut</option>
        <option>Kerok Jengot</option>
        <option>Cat Rambut</option>
        </select>
        <?php } ?>
        </fieldset>
        <fieldset class="form-group">
        <label>Karyawan</label>
        <select class="form-control" name="kry[]">
        <option>Rizki Alam Ramdhani</option>
        <option>ucok Boy yes</option>
        <option>Dik coy bos</option>
        </select>        </fieldset>
          <button type='submit' class='btn btn-primary' name='tambah'>Tambah</button>
      </fieldset>
    </form>
  </td>
</tr>
</table>
    <div style="margin-left: auto;">
      <table class='table table-striped table-bordered table-hover col-lg-12 col-md-8 col-sm-6 col-xs-4'>
        <thead>
          <tr>
            <th colspan="2">
              <center><strong>HARGA</strong></center>
            </th>
          </tr>
        </thead>
        <td>
          <?php
          if(isset($_POST['tambah'])){
            $isi = $_POST['paket'];
  foreach($isi as $key => $val){

  echo $isi[$key].'<br/>';

  }
        }
          ?>
        </td>
        <td>
          <?php
            foreach($isi as $key => $val){
              for($i=0;$i < count($isi[$key]); $i++){
              if($isi[$key] == 'Potong Rambut'){
              $harga = 15000;
              echo "Rp ".rp($harga).'</br>';
            }
            elseif($isi[$key] == 'Kerok Jengot'){
              $harga = 5000;
              echo "Rp ".rp($harga).'</br>';
            }
            elseif($isi[$key] == 'Cat Rambut'){
              $harga = 35000;
              echo "Rp ".rp($harga).'</br>';
            }$total += $harga;
          }
          }
          ?>
        </td>
        <tr>
          <td colspan="2" style="text-align: center">
            <?php
            if(isset($_POST['tambah'])){
              $kry = $_POST['kry'];
              foreach ($kry as $key => $value) {
                echo "Karyawan : ".$kry[$key];
              }
            }
            ?>
          </td>
        </tr>
        <tr>
          <td colspan="2" style="text-align:center;">
            <?php
function rp($angka){ $angka = number_format($angka); $angka = str_replace(',', '.', $angka); $angka ="$angka"; return $angka;}
            echo "Total : Rp ". rp($total);

            ?>
          </td>
        </tr>
      </table>
      <form action="aksi_bayar.php" method="POST">
        <?php 
        foreach ($isi as $key) {
        echo "
        <input type='hidden' name='pket[]' value='$isi[$key]'>";
      }
        echo "
        <input type='hidden' name='krywn[]' value='$kry[$key]'>
        <input type='hidden' name='total' value='$total'>"
        ?>
            <center>
            </br>
              <button type='submit' class='btn btn-primary' name='bayar'>Bayar</button>
              </center>
      </form>
    </div>
                <!-- /.row -->
              </div>
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
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="../dist/js/pages/dashboard2.js"></script>
</body>
</html>
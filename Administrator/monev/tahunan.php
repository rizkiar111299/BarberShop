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
    <a href="http://localhost/barber/Administrator/" class="brand-link">
      <img src="../../dist/img/img.svg" alt="Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light" ><b>BARBERSHOP ABADI II</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <?= include "../pages/menu/menu.php"; ?>
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
            <h1 class="m-0 text-dark">Laporan Keuangan Tahunan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
              <li class="breadcrumb-item active">Laporan keuangan Tahunan</li>
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
<form method="POST" class="form-inline" action="">
<label>Tahun</label> &nbsp;
<select name="tahun[]" class="form-control">
<?php
$mulai= date('Y') - 50;
for($i = $mulai;$i<$mulai + 100;$i++){
    $sel = $i == date('Y') ? ' selected="selected"' : '';
    echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
}
?>
</select>
   &nbsp;&nbsp;
   <button class="btn btn-primary" name="filter" value="filter"><span class="glyphicon glyphicon-search"></span> Search</button>
 </table>
  </form>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-12 col-md-10 col-sm-10 col-xs-6">
<?php
if(!empty(($_POST['filter'] == 'filter'))){
include "../../koneksi/koneksi.php";
echo "<table class='table table-striped table-bordered table-hover col-lg-12 col-md-6 col-sm-4 col-xs-6'>
        <thead style='text-align:center;'>
          <tr style='background:#e3e3e3; border:1px solid #cecece;'>
          <th>No</th>
          <th>Karyawan</th>
          <th>Tanggal</th>
          <th>Jam</th>
          <th>Pendapatan</th>
        </thead> ";
 $bulan = $_POST['bulan'];
 $tahun = $_POST['tahun'];
 $Karyawan = $_POST['kry'];
 $query = mysqli_query($con, "SELECT* from transaksi where year(tanggal) = '$tahun[0]'");
   function rp($angka){ $angka = number_format($angka); $angka = str_replace(',', '.', $angka); $angka ="$angka"; return $angka;}
       $no=1;
    while ($r=mysqli_fetch_array($query)){
      $tl = $r['total'];
      $hasil += $tl;
       echo "<tr>
                <td style='text-align:center;'>$no</td>
                <td style='text-align:center;'>$r[nama_lengkap]</td>
                <td style='text-align:center;'>$r[tanggal]</td>
                <td style='text-align:center;'>$r[jam]</td>
                <td style='text-align:center;'>"; echo rp($tl); echo "</td>
             </tr>
             ";
      $no++;
    }
    echo "<tr>
    <td colspan='4' style='text-align:right;'>
    <label>Total</label></br>
    </td>
    <td style='text-align:center;'>";
    ?>
    <input type="text" value="Rp <?= rp($hasil); ?>" style='width:284px;' disabled></br>
    <?php echo "</td>
    </tr>
    </table>";
?> 
<?php } ?>
                  <!-- /.col -->
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
  <script>
    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))
 
        return false;
      return true;
    }
  </script>

  <script>
function sum() {
      var txtFirstNumberValue = document.getElementById('data1').value;
      var result = parseInt(<?=$hasil?>) - parseInt(txtFirstNumberValue);
      if (!isNaN(result)) {
         document.getElementById('data3').value = result;
      }
}
</script>

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
<?php
  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
  session_start();
  include '../../koneksi/session_admin.php';
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
<body>
    <script>
window.print();
</script>

<div class="row">
<?php
if(!empty($_POST['cetak']) == "Cetak"){
include "../../koneksi/koneksi.php";
echo "<table class='table table-striped table-bordered table-hover col-lg-12 col-md-6 col-sm-4 col-xs-6'>
        <thead style='text-align:center;'>
          <tr style='background:#e3e3e3; border:1px solid #cecece;'>
          <th>No</th>
          <th>Tanggal</th>
          <th>Pendapatan</th>
        </thead> ";
 $bulan = $_POST['bln'];
 $tahun = $_POST['thn'];
 $bln = mysqli_real_escape_string($con,$bulan);
 $thn = mysqli_real_escape_string($con,$tahun);
 $query = mysqli_query($con, "SELECT* from transaksi where  month(tanggal)='$bulan' and year(tanggal) = '$tahun'");
   function rp($angka){ $angka = number_format($angka); $angka = str_replace(',', '.', $angka); $angka ="$angka"; return $angka;}
       $no=1;
       $hasil = 0;
    while ($r=mysqli_fetch_array($query)){
      $tl = $r['total'];
      $hasil += $tl;
       echo "<tr>
                <td style='text-align:center;'>$no</td>
                <td style='text-align:center;'>$r[tanggal]</td>
                <td style='text-align:center;'>Rp "; echo rp($tl); echo "</td>
             </tr>
             ";
      $no++;
    }
  $tanggal = $_POST['tgl'];
  $keterangan = $_POST['ktr'];
  $pengeluaran = $_POST['pgl'];
  $total = $_POST['ttl'];
  $Pendapatan  = $total - $pengeluaran;
    echo "<tr><td colspan='2' style='text-align:right;'><label>Total</label></td><td style='text-align:center;'>Rp "; echo rp($hasil - $pengeluaran); echo "</td></tr>";
    mysqli_query($con,"INSERT INTO pengeluaran (tanggal,keterangan,jml_pengeluaran,total,pendapatan) VALUES ('$tanggal','$keterangan','$pengeluaran','$total','$Pendapatan')");
  }
?> 
                </form>
</body>
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
                  include "../../koneksi/koneksi.php";
                  $getus   = mysqli_real_escape_string($con,$_GET['id']);
                  $sql = mysqli_query($con,"SELECT * FROM transaksi WHERE id_transaksi='$getus'");
                  $r = mysqli_fetch_array($sql);
                  $id = $r['id_transaksi'];
                  $kry = $r['nama_lengkap'];
                  $AN = $r['atas_nama'];
                  $dws = $r['dewasa'];
                  $ank = $r['anak'];
                  $paket = $r['paket'];
                  $total = $r['total'];
                  $tanggal = $r['tanggal'];
                  $jam = $r['jam'];
                  function rp($angka){ $angka = number_format($angka); $angka = str_replace(',', '.', $angka); $angka ="$angka"; return $angka;}

                  ?>
                  <div style='margin-left: 17%;width: 450px;'>
                    <form action='print.php' method='POST'>
                  <table class='table table-striped table-bordered table-hover col-lg-12 col-md-6 col-sm-4 col-xs-6'>
                    <th colspan='2' style='text-align:center'> STRUK PEMBYARAN </br>BARBER SHOP ABADI II</br><?= $tanggal; ?>&nbsp;&nbsp;<?= $jam; ?></th>
                    <tr>
                      <td><label> Karyawan</label></td>
                      <td><input type='text'  value='<?= $kry; ?>' style='width: 284px;' disabled>
                      <input type='hidden' name='id_us' value='<?= $id; ?>'></td>
                    </tr>
                    <tr>
                      <td><label>Atas Nama</label></td>
                      <td><input type='text' value="<?= $AN; ?>" style='width: 284px;' disabled></td>
                    </tr>
                    <tr>
                      <td><label>Layanan : Potong Rambut</label></td>
                      <td>
                        <label>Dewasa&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type='text' name='dews' value='<?= $dws; ?> Orang' disabled></br>
                        <label>Anak-Anak &nbsp; </label>
                        <input type='text' name='nak' value='<?= $ank; ?> Orang' disabled></br>

                    </tr>
                    <tr>
                    <td colspan='2'><label>Service</label> : <?php echo $r[paket]; ?> </td>
                  </tr>
                  <tr>
                    <td colspan='2' align='center'><label>Bayar&nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' value="Rp <?php echo rp($r[bayar]); ?>" style='width:284px;' name='bayar' disabled> </td>
                  </tr>
                    <tr>
                      <td colspan='2' align='center'><label>Total</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='total' style='width:284px;' value='Rp <?= rp($total); ?>' id='data2' disabled></td>
                    </tr>
                    <tr>
                    <td colspan='2' align='center'><label>Kembalian&nbsp;&nbsp;</label><input type='text' value='Rp <?php echo rp($r[kembalian]); ?>' id='data3' style='width:284px;' name='kembalian' disabled > </td>
                    </tr>
                    <tr>
                    	<td colspan='2' align='center'>jl. Haur pancuh, no 125, lebak gede, kota bandung</br> No WA 083816178265</td>
                    </tr>
                  </table>
                </form>
</body>
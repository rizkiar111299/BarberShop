<?php
  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
  include '../../koneksi/session_admin.php';
  include '../../koneksi/koneksi.php';
  $id = $_POST['id_us'];
  $harga = $_POST['bayar'];
  $status = $_POST['status'];
  $total = $_POST['total'];
  $hasil = $harga - $total;
  mysqli_query($con,"UPDATE transaksi SET bayar = '$harga',kembalian = '$hasil',status = '$status' where id_transaksi = '$id' ");
  echo "<script>window.alert('Pembayaran Sudah Di Simpan');
   window.location='print.php?id=$id'</script>";
  var_dump($_POST); exit();
?>
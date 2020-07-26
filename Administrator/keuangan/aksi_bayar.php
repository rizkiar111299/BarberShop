<?php
include "../../koneksi/koneksi.php";
if(isset($_POST['bayar'])){
	$array = $_POST['pket'];
	$paket = implode("</br>",$array);
	$karyawan = $_POST['krywn'];
	$ttl = $_POST['total'];
	mysqli_query($con,"INSERT INTO transaksi(paket,nama_lengkap,total) VALUES ('$paket','$karyawan','$ttl')");
 #     echo "<script>window.alert('Pembayaran Sudah Di Simpan');
#				window.location='http://localhost/barber/Administrator/riwayat_transaksi/'</script>";
}
?>
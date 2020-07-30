<?php
include "../../koneksi/koneksi.php";
if(isset($_POST['bayar'])){
	$paket = $_POST['paket'];
	$karyawan = $_POST['kry'];
	$hrg = $_POST['harga'];
	$array = implode('</br>',$paket);
	$array2 = implode('</br>',$karyawan);
	$array3 = implode('</br>',$hrg);
	$ttl = $_POST['total'];
	$jml_ar = count($array);
	mysqli_query($con,"INSERT INTO transaksi(paket,harga,nama_lengkap,total) VALUES ('$array','$array3','$array2','$ttl')");
   echo "<script>window.alert('Pembayaran Sudah Di Simpan');
			window.location='http://localhost/barber/Administrator/keuangan/riwayat_transaksi.php'</script>";
}
?>
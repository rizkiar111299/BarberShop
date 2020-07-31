<?php
include "../../koneksi/koneksi.php";
if(isset($_POST['bayar'])){
	$paket = $_POST['paket'];
	$karyawan = $_POST['kry'];
	$hrg = $_POST['harga'];
	$id_user = $_POST['id_user'];
	$array = implode('</br>',$paket);
	$array2 = implode('</br>',$karyawan);
	$array3 = implode('</br>',$hrg);
	$ttl = $_POST['total'];
	$jml_ar = count($paket);
	mysqli_query($con,"INSERT INTO transaksi(id_user,paket,harga,nama_lengkap,total,org) VALUES ('$id_user','$array','$array3','$array2','$ttl','$jml_ar')");
   echo "<script>window.alert('Pembayaran Sudah Di Simpan');
			window.location='http://localhost/barber/Administrator/keuangan/riwayat_transaksi.php'</script>";
}
?>
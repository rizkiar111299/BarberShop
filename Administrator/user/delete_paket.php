<?php
include "../../koneksi/koneksi.php";
$id = mysqli_real_escape_string($con,$_GET['id']);
mysqli_query($con,"DELETE FROM paket WHERE id_paket='$id'");
echo "<script>window.alert('Data Sudah Di Hapus..');
	window.location='http://localhost/barber/Administrator/user/paket.php'</script>";

?>
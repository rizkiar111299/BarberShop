<?php
include "../../koneksi/koneksi.php";
$id = mysqli_real_escape_string($con,$_GET['id']);
mysqli_query($con,"DELETE FROM user WHERE id_user='$id'");
echo "<script>window.alert('Data Sudah Di Hapus..');
	window.location='http://localhost/barber/Administrator/user/'</script>";

?>
<?php
include "../../koneksi/koneksi.php";
	$paket = $_POST['paket'];
	$harga = $_POST['harga'];
	$type = $_POST['typ'];
    mysqli_query($con,"UPDATE paket SET paket='$paket',harga='$harga',type = '$type' WHERE id_paket='$_POST[id_pkt]'");
  #echo "<script>window.alert('Data Sudah Di Update..');
	#window.location='http://localhost/barber/Administrator/user/paket.php'</script>";
?>
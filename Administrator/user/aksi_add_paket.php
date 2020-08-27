<?php 
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
include "../../koneksi/koneksi.php";

$pkt = htmlspecialchars($_POST['paket']);
$harga = htmlspecialchars($_POST['harga']);
$type = htmlspecialchars($_POST['typ']);
mysqli_query($con,"INSERT INTO paket(paket,harga,type) VALUES ('$pkt','$harga','$type')");
    echo "<script>window.alert('Data Sudah Di Simpan');
		window.location='http://localhost/barber/Administrator/user/paket.php'</script>";
?>
<?php 
include "../../koneksi/koneksi.php";

$pkt = htmlspecialchars($_POST['paket']);
mysqli_query($con,"INSERT INTO paket(paket) VALUES ('$pkt')");
    echo "<script>window.alert('Data Sudah Di Simpan');
		window.location='http://localhost/barber/Administrator/user/paket.php'</script>";
?>
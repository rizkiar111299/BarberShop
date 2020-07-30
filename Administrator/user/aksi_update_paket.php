<?php
include "../../koneksi/koneksi.php";
    mysqli_query($con,"UPDATE paket SET paket='$_POST[paket]' WHERE id_paket='$_POST[id_pkt]'");
  echo "<script>window.alert('Data Sudah Di Update..');
	window.location='http://localhost/barber/Administrator/user/paket.php'</script>";
?>
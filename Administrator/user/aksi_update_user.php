<?php
include "../../koneksi/koneksi.php";
if(empty($_POST['passwd'])){
    mysqli_query($con,"UPDATE user SET nama_lengkap='$_POST[namalengkap]',
    				email='$_POST[email1]',
    				no_hp='$_POST[no_tlp]',
    				level='$_POST[level]' WHERE id_user='$_POST[id_us]'");
  echo "<script>window.alert('Data Sudah Di Update..');
	window.location='http://localhost/barber/Administrator/user/'</script>";
}
elseif (!empty($_POST['passwd'])) {
    mysqli_query($con,"UPDATE user SET nama_lengkap='$_POST[namalengkap]',
    				email='$_POST[email1]',
    				password='$_POST[passwd]',
    				no_hp='$_POST[no_tlp]',
    				level='$_POST[level]' WHERE id_user='$_POST[id_us]'");
  echo "<script>window.alert('Data Sudah Di Update..');
	window.location='http://localhost/barber/Administrator/user/'</script>";
}
?>
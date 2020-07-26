<?php 
include "../../koneksi/koneksi.php";

$namalengkap = htmlspecialchars($_POST['namalengkap']);
$username = htmlspecialchars($_POST['usern']);
$email = htmlspecialchars($_POST['email1']); 
$passwd = htmlspecialchars(md5($_POST['passwd'])); 
$notlp = htmlspecialchars($_POST['no_tlp']);
$Level = htmlspecialchars($_POST['level']);

$pass=md5($passwd);
mysqli_query($con,"INSERT INTO user(nama_lengkap, username, email, password,no_hp, level) VALUES ('$namalengkap','$username','$email','$passwd','$notlp','$Level')");
      echo "<script>window.alert('Data Sudah Di Simpan');
				window.location='http://localhost/barber/Administrator/user/'</script>";
?>
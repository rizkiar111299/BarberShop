<?php
#error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
include "koneksi/koneksi.php";

$pass= mysqli_real_escape_string($con,md5($_POST['password']));
$level=$_POST['level'];
$username = mysqli_real_escape_string($con,$_POST['usern']);
if ($level=='admin'){
$login=mysqli_query($con,"SELECT * FROM user WHERE username='$username' AND password='$pass' AND level='$level'");
$cocok=mysqli_num_rows($login);
$r=mysqli_fetch_array($login);

if ($cocok > 0){
	session_start();
	$_SESSION['id_user']     = $r['id_user'];
	$_SESSION['passuser']     = $r['password'];
  	$_SESSION['namalengkap']  = $r['nama_lengkap'];
	$_SESSION['email']    	= $r['email'];
	$_SESSION['telp']    	= $r['no_telp'];
	$_SESSION['alamat']    	= $r['alamat_lengkap'];
	$_SESSION['gender']   = $r['gender'];
  	$_SESSION['leveladmin']    = $r['level'];

	header('location:http://localhost/barber/Administrator');
	}
else{
echo "<script>window.alert('Username atau Password anda salah.');
				window.location='https://localhost/Login/'</script>";
	}

}

else if ($level=='member'){
$login=mysqli_query($con,"SELECT * FROM rb_users WHERE username='$username' AND password='$pass' AND level='$level'");
$cocok=mysqli_num_rows($login);
$r=mysqli_fetch_array($login);

if ($cocok > 0){
	session_start();
	$_SESSION['id_user']     = $r['id_user'];
	$_SESSION['passuser']     = $r['password'];
  	$_SESSION['namalengkap']  = $r['nama_lengkap'];
	$_SESSION['email']    	= $r['email'];
	$_SESSION['telp']    	= $r['no_telp'];
	$_SESSION['alamat']    	= $r['alamat_lengkap'];
	$_SESSION['gender']   = $r['jenis_kelamin'];
  	$_SESSION['leveluser']    = $r['level'];

	header('location:https://localhost/Login/');
	}
else{
echo "<script>window.alert('Username atau Password anda salah.');
				window.location='https://localhost/Login/'</script>";
	}
}
else{
echo "<script>window.alert('Username atau Password anda salah.');
				window.location='https://localhost/Login/'</script>";
	}

?>
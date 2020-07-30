<?php
session_start();
$_SESSION['id_user']     = "";
$_SESSION['namauser']     = "";
$_SESSION['email']    	= "";
$_SESSION['namalengkap']  = "";
$_SESSION['passuser']     = "";
$_SESSION['leveluser']    = "";
unset($_SESSION['id_user']);
unset($_SESSION['namauser']);
unset($_SESSION['email']);
unset($_SESSION['namalengkap']);
unset($_SESSION['passuser']);
unset($_SESSION['leveluser']);
session_unset();
session_destroy();
echo "<script>window.alert('Anda Berhasil Logout, anda akan di alihkan ke halaman login!!');
        window.location=('http://localhost/barber/')</script>";
?>
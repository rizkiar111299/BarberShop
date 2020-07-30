<?php
session_start();
if(!isset($_SESSION[leveluser])){
	echo "<script>window.alert('Untuk mengakses, Anda harus Login Sebagai Karyawan');
        window.location=('http://localhost/barber/')</script>";
   }
?>
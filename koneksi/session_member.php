<?php
session_start();
if(!isset($_SESSION[leveluser])){
	echo "<script>window.alert('Untuk mengakses, Anda harus Login Sebagai member');
        window.location=('http://localhost/barber/')</script>";
   }
?>
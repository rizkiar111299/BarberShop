<?php
session_start();
if(!isset($_SESSION['leveladmin'])){
	echo "<script>window.alert('Untuk mengakses, Anda harus Login Sebagai admin');
        window.location=('http://localhost/barber/')</script>";
   }
?>
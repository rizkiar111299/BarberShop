<?php
session_start();
if(!isset($_SESSION['levelguest'])){
	echo "<script>window.alert('Untuk mengakses, Anda harus Login Sebagai Guest');
        window.location=('/')</script>";
   }
?>
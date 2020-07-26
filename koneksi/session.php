<?php
// memulai session
session_start();
error_reporting(0);
if (!isset($_SESSION['leveluser']))
{
	// jika level admin
	if ($_SESSION['leveluser'] == "admin")
   {   
       	echo "<script>window.alert('Untuk mengakses, Anda harus Login Sebagai admin');
        window.location=('/administrator')</script>";
   }
   // jika kondisi level user maka akan diarahkan ke halaman lain
   else if ($_SESSION['leveluser'] == "member")
   {
	echo "<script>window.alert('Untuk mengakses, Anda harus Login Sebagai member');
        window.location=('/member')</script>";
   }
      else if ($_SESSION['leveluser'] == "guest")
   {
	echo "<script>window.alert('Untuk mengakses, Anda harus Login Sebagai Guest');
        window.location=('/')</script>";
   }
}
if (isset($_SESSION['leveluser']))
{
	echo "<script>window.alert('Anda Belum Login.');
        window.location=('/')</script>";
}
 ?>
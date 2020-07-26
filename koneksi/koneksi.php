<?php
  $host = "localhost";
  $username = "root";
  $password = "";
  $database = "barber";
  $con = mysqli_connect($host,$username,$password,$database);
  
  //check koneksi
  
  if (mysqli_connect_errno()){
    echo "Koneksi Gagal Terhubung !!!". mysqli_connect_error();
  }
?>
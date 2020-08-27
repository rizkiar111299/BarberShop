<?php
 error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
/** include "../../koneksi/koneksi.php";
if(isset($_POST['bayar'])){
	$paket = $_POST['paket'];
	$karyawan = $_POST['kry'];
	$hrg = $_POST['harga'];
	$id_user = $_POST['id_user'];
	$array = implode('</br>',$paket);
	$array2 = implode('</br>',$karyawan);
	$array3 = implode('</br>',$hrg);
	$ttl = $_POST['total'];
	$jml_ar = count($paket);
	mysqli_query($con,"INSERT INTO transaksi(id_user,paket,harga,nama_lengkap,total,org) VALUES ('$id_user','$array','$array3','$array2','$ttl','$jml_ar')");
   echo "<script>window.alert('Pembayaran Sudah Di Simpan');
			window.location='http://localhost/barber/Administrator/keuangan/riwayat_transaksi.php'</script>";
} **/

include "../../koneksi/koneksi.php";
if(!empty($_POST['Hitung'])){
date_default_timezone_set('Asia/Jakarta');
    $total = 0;
    $harga = 0;
    $harga2 = 0;
    $harga3 = 0;
    $harga4 = 0;
    $gender = $_POST['gender'];
    $gender2 = $_POST['gender2'];
    $dws = $_POST['dews'];
    $ank = $_POST['nak'];
    $paket = $_POST['paket'];
    $array = implode('</br>',$paket);
    $karyawan = $_POST['kry'];
    $tgl = date("Y-m-d");
    $jm = date("H:i:s");
    $AN = $_POST['nama'];

    $sql = mysqli_query($con, "SELECT * FROM user where nama_lengkap='$karyawan'");
	$r = mysqli_fetch_array($sql);
	$kry = $r['id_user'];

                if($gender == 'dewasa'){
                    $sql = mysqli_query($con,"SELECT * FROM paket where type = 'dewasa'");
                    $data = mysqli_fetch_array($sql);
                    $harga1 = $data['harga'] * $dws;
                }
                else{
                }
                if($gender2 == 'anak'){
                    $sql = mysqli_query($con,"SELECT * FROM paket where type = 'anak-anak'");
                    $data = mysqli_fetch_array($sql);
                    $harga2 = $data['harga']  * $ank;
                }
                else{
                }
    foreach ($paket as $key => $value) {
        for($p=0; $p < count($paket[$key]); $p++){
            $sql = mysqli_query($con,"SELECT * FROM paket where paket = '$paket[$key]'");
            $data = mysqli_fetch_array($sql);
            $harga = $data['harga'];
            $total += $harga;
        }
    }
        $harga = $harga1 + $harga2 + $total;
        $orang = $dws + $ank;
        mysqli_query($con,"INSERT INTO transaksi (id_user, paket, harga, tanggal, jam, nama_lengkap, atas_nama, dewasa, anak,  total, org) VALUES ('$kry','Potong Rambut </br> $array','$harga','$tgl','$jm','$karyawan','$AN','$dws','$ank','$harga','$orang')");
      echo "<script>window.alert('Pembayaran Sudah Di Simpan');
      window.location='http://localhost/barber/Administrator/keuangan/riwayat_transaksi.php'</script>";
}
?>
<?php
  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
  session_start();
  include '../../koneksi/session_admin.php';
?>
<head><meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
<title>Struk pembayaran</title>
<style>
table, td, th
{
border:1px solid #000;
}
th
{
background-color:#e3e3e3;
color:#000;
font-weight: bold;
}
</style>
</head>

<body>
    <script>
window.print();
</script>
<?php
include "../../koneksi/koneksi.php";
include "../../koneksi/session_admin.php";
$id = mysqli_real_escape_string($con,$_GET['id']);
$sql=mysqli_query($con,"SELECT * FROM transaksi WHERE id_transaksi='$id'");
$r=mysqli_fetch_array($sql);
	echo "
		 <center>
		 <table>
		 <caption><strong>Struk Pembayaran</br>
		 	BARBERSHOP ABADI II</strong></br>
		 	$r[tanggal_jam] </caption>		  	
		  	<th>
		  	Paket
		  	</th>
		  	<th>
		  	Biaya
		  	</th>
		  	<tr>
                <td>
					$r[paket]
				</td>
				<td>
				$r[harga]
				</td>
			</tr>
			<tr>
			<td>
			Total
			</td>
			<td>
			$r[total]
			</td>
			</tr>
			<td colspan='2' style=text-align:center;>
			Karyawan : $r[nama_lengkap]
			</td>
			</tr>
		</table>
					<caption>Jl.Haur pancuh, no 125, lebak gede, kota bandung</caption>
	</center>";

?>
</body>
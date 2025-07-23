<?php
include('koneksi/conn.php');
$idsaksi= mt_rand(100000000,1000000000);
$byr=$_POST['tgl_bayar'];
$jum=$_POST['jum_tiket'];
$hrg=$_POST['harga'];
$ttl=$_POST['total'];
$idrev=$_POST['id_reservasi'];
$idtkt=$_POST['id_tiket'];



$query3 = "INSERT INTO transaksi values('$idsaksi','$byr','$jum','$hrg','$ttl','$idrev','$idtkt')";
$result3 = mysqli_query($conn,$query3)or die(mysqli_error($conn));
 
		$querypesan 			= "SELECT * FROM transaksi WHERE id_transaksi='$idsaksi'";
		$cekquery				= mysqli_query($conn, $querypesan)or die(mysqli_error($conn));
		$data 					= mysqli_fetch_array($cekquery);
		

echo "<meta http-equiv=refresh content=3;url=akhiran.php?id_transaksi=$data[id_transaksi]>";

?>



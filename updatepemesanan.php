<?php 
include('template/top.php');
include('template/navigasi.php');
?>

		<?php
		include('koneksi/conn.php');
$pesan=$_POST['pesan'];
$idpnp=$_POST['id_penumpang'];
$nmpnp=$_POST['nm_penumpang'];
$alamat=$_POST['alamat'];
$nohp=$_POST['no_telepon'];
$gender=$_POST['gender'];
$idkrt=$_POST['id_kereta'];
$brkt=$_POST['jadwal'];

$query	= "UPDATE penumpang SET('$idpnp','$nmpnp','$alamat','$gender','$nohp')" ;
$query1 = "UPDATE reservasi SET ('','$idpnp','$idkrt','$brkt','$pesan')";
 $update = mysqli_query($conn,$query)or die(mysqli_error($conn));
  $update1 = mysqli_query($conn,$query1)or die(mysqli_error($conn));

		$querypesan 			= "SELECT * FROM reservasi WHERE id_reservasi='' AND id_penumpang='$idpnp' AND tgl_berangkat='$brkt' AND tgl_pesan='$pesan' ORDER BY id_penumpang DESC LIMIT 1";
		$cekquery				= mysqli_query($conn, $querypesan)or die(mysqli_error($conn));
		$data 					= mysqli_fetch_array($cekquery);
		

echo "<meta http-equiv=refresh content=3;url=konfirmasi.php?id_reservasi=$data[id_reservasi]>";
?>
<?php
include('koneksi/conn.php');
$pesan=$_POST['pesan'];
$idpnp=$_POST['id_penumpang'];
$idrev= mt_rand(10000000,100000000);
$idkrt=$_POST['id_kereta'];
$brkt=$_POST['jadwal'];

$query = "Insert into reservasi values ('$idrev','$idpnp','$idkrt','$brkt','$pesan')";
$result = mysqli_query($conn,$query)or die(mysqli_error($conn));
if($result){
	echo "<script type='text/javascript'>
	alert('Data Berhasil Disimpan..!');
	</script>";
echo "<meta http-equiv='refresh' content='0; url=entry_reservasi.php'>";
}else{
	echo "<script type='text/javascript'>
	onload =function(){
		alert('data gagal disimpan!');
	}
	</script>";

var_dump($_FILES);
//KEMBALI KE LIST.PHP
echo "data berhasil dimasukkan";
echo "<meta http-equiv=refresh content=3;url=entry_reservasi.php>";
}

?>
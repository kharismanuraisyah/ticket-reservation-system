<?php
include('koneksi/conn.php');
$idsaksi= mt_rand(100000000,1000000000);
$byr=$_POST['tgl_bayar'];
$jum=$_POST['jum_tiket'];
$hrg=$_POST['harga'];
$ttl=$_POST['total'];
$idrev=$_POST['reservasi'];
$idtkt=$_POST['tiket'];

$query = "INSERT INTO transaksi values('$idsaksi','$byr','$jum','$hrg','$ttl','$idrev','$idtkt')";
$result = mysql_query($query) or die(mysql_error()) ;
if($result){
	echo "<script type='text/javascript'>
	alert('Data Berhasil Disimpan..!');
</script>";
echo "<meta http-equiv='refresh' content='0; url=entry_transaksi.php'>";
}else{
	echo "<script type='text/javascript'>
	onload =function(){
		alert('data gagal disimpan!');
	}
</script>";

var_dump($_FILES);
//KEMBALI KE LIST.PHP
echo "data berhasil dimasukkan";
echo "<meta http-equiv=refresh content=3;url=entry_transaksi.php>";
}
?>



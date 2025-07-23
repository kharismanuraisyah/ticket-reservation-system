<?php
include('koneksi/conn.php');
$idkrt=$_POST['id_kereta'];
$brkt=$_POST['jadwal'];
$idtkt= mt_rand(100000,1000000);
$kursi=$_POST['kursi'].$_POST['AB'];
$grb=$_POST['gerbong'];

$query = "INSERT INTO tiket values('$idtkt','$idkrt','$brkt','$grb','$kursi')";
$result = mysql_query($query) or die(mysql_error()) ;
if($result){
	echo "<script type='text/javascript'>
	alert('Data Berhasil Disimpan..!');
</script>";
echo "<meta http-equiv='refresh' content='0; url=entry_tiket.php'>";
}else{
	echo "<script type='text/javascript'>
	onload =function(){
		alert('data gagal disimpan!');
	}
</script>";

var_dump($_FILES);
//KEMBALI KE LIST.PHP
echo "data berhasil dimasukkan";
echo "<meta http-equiv=refresh content=3;url=entry_tiket.php>";
}
?>



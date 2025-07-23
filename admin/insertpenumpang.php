<?php
include('koneksi/conn.php');
$idpnp=$_POST['id_penumpang'];
$nmpnp=$_POST['nm_penumpang'];
$alamat=$_POST['alamat'];
$nohp=$_POST['no_telepon'];
$gender=$_POST['gender'];

$query	= "INSERT INTO penumpang values('$idpnp','$nmpnp','$alamat','$gender','$nohp')";
$result = mysqli_query($conn,$query)or die(mysqli_error($conn));
if($result){
	echo "<script type='text/javascript'>
	alert('Data Berhasil Disimpan..!');
</script>";
echo "<meta http-equiv='refresh' content='0; url=entry_konsumen.php'>";
}else{
	echo "<script type='text/javascript'>
	onload =function(){
		alert('data gagal disimpan!');
	}
</script>";

var_dump($_FILES);
//KEMBALI KE LIST.PHP
echo "data berhasil dimasukkan";
echo "<meta http-equiv=refresh content=3;url=entry_konsumen.php>";
}
?>



<?php 
include('template/top.php');
include('template/navigasi.php');
 if(!isset($_SESSION)){
 	session_start();
 }
 if (empty($_SESSION['username'])) {
 	header('Location:login.php');
 }
?>

<div id="main">
	<div class="content">
		<?php
		include('koneksi/conn.php');
$idpnp=$_POST['id_penumpang'];
$nmpnp=$_POST['nm_penumpang'];
$alamat=$_POST['alamat'];
$nohp=$_POST['no_telepon'];
$gender=$_POST['gender'];

$query	= "UPDATE penumpang SET nm_penumpang='$nmpnp', alamat='$alamat', gender='$gender', no_telp='$nohp' WHERE id_penumpang='$idpnp' ";
$update = mysqli_query($conn,$query)or die(mysqli_error($conn));

//jika query update sukses
		if($update){

  echo '<br/><br/>Data berhasil di Update! ';
  echo '<a href="entry_konsumen.php" class="btn">Kembali</a>'; //membuat Link untuk kembali ke halaman edit
  
}else{

  echo 'Gagal menyimpan data!)';  //Pesan jika proses simpan gagal
  echo '<a href="editkonsumen.php?idp='.$id.'" class="btn">Kembali</a>'; //membuat Link untuk kembali ke halaman edit
  
}


?>

</div>
</div>


<?php include('template/footer.php'); ?>


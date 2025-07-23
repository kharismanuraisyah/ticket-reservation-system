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
$pesan=$_POST['pesan'];
$idpnp=$_POST['id_penumpang'];
$idkrt=$_POST['id_kereta'];
$brkt=$_POST['jadwal'];
$idrev=['id'];

$query = "UPDATE reservasi SET id_penumpang='$idpnp', id_kereta='$idkrt', tgl_berangkat='$brkt', tgl_pesan='$pesan' WHERE id_reservasi='$idrev' ";
$update = mysqli_query($conn,$query)or die(mysqli_error($conn));

//jika query update sukses
		if($update){

  echo '<br/><br/>Data berhasil di Update! ';  //Pesan jika proses simpan sukses
  echo '<a href="entry_reservasi.php" class="btn">Kembali</a>'; //membuat Link untuk kembali ke halaman edit
  
}else{

  echo 'Gagal menyimpan data! ';  //Pesan jika proses simpan gagal
  echo '<a href="editreservasi.php?idp='.$id.'" class="btn">Kembali</a>'; //membuat Link untuk kembali ke halaman edit
  
}


?>

</div>
</div>


<?php include('template/footer.php'); ?>


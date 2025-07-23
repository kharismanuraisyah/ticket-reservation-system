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
$idkrt=$_POST['id_kereta'];
$brkt=$_POST['jadwal'];
$idtkt=['id'];
$kursi=$_POST['kursi'].$_POST['AB'];
$grb=$_POST['gerbong'];

$query = "UPDATE tiket SET id_kereta='$idkrt', tgl_berangkat='$brkt', gerbong='$grb', no_kursi='$kursi' WHERE id_tiket=$idtkt'";
$update = mysql_query($query) or die(mysql_error()) ;
		
//jika query update sukses
		if($update){

  echo '<br/><br/>Data berhasil di Update ';  //Pesan jika proses simpan sukses
  echo '<a href="entry_tiket.php" class="btn">Kembali</a>'; //membuat Link untuk kembali ke halaman edit
  
}else{

  echo 'Gagal menyimpan data! ';  //Pesan jika proses simpan gagal
  echo '<a href="edittujuan.php?id_tujuan='.$id.'" class="btn">Kembali</a>'; //membuat Link untuk kembali ke halaman edit
  
}


?>

</div>
</div>


<?php include('template/footer.php'); ?>


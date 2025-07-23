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
$idsaksi=['id'];
$byr=$_POST['tgl_bayar'];
$jum=$_POST['jum_tiket'];
$hrg=$_POST['harga'];
$ttl=$_POST['total'];
$idrev=$_POST['reservasi'];
$idtkt=$_POST['tiket'];

$query = "UPDATE transaksi SET tgl_bayar='$byr', jum_tiket='$jum', harga_tiket='$hrg', total_bayar='$ttl', id_reservasi'$idrev', id_tiket='$idtkt' WHERE id_transaksi='$id' ";
$update = mysql_query($query) or die(mysql_error()) ;

//jika query update sukses
		if($update){

  echo '<br/><br/>Data berhasil di simpan! ';  //Pesan jika proses simpan sukses
  echo '<a href="entry_transaksi.php" class="btn">Kembali</a>'; //membuat Link untuk kembali ke halaman edit
  
}else{

  echo 'Gagal menyimpan data! ';  //Pesan jika proses simpan gagal
  echo '<a href="edittransaksi.php?id_transaksi='.$id.'" class="btn">Kembali</a>'; //membuat Link untuk kembali ke halaman edit
  
}


?>

</div>
</div>


<?php include('template/footer.php'); ?>


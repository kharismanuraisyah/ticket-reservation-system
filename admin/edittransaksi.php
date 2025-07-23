<?php 
include('koneksi/conn.php');
include('template/top.php');
include('template/navigasi.php');
 if(!isset($_SESSION)){
 	session_start();
 }
 if (empty($_SESSION['username'])) {
 	header('Location:login.php');
 }
$id=$_GET['id_pembayaran'];

$no=1;
$sql = "SELECT * FROM tbl_pembayaran WHERE no_pembayaran='$id' "; 
$hasil=mysqli_query($conn,$sql) or die(mysqli_error());
while ($tampil=mysqli_fetch_array($hasil))
{

?>

<div id="main">
	<div class="content">
		<h3>Edit Transaksi</h3>
		<form action="updatetransaksi.php" method="POST">
			<div class="input-group">
				Tanggal Pembayaran: <input type="date" value="<?php echo $tampil['tgl_bayar']; ?>" name="tgl_bayar">
			</div>
			<div class="input-group">
				Jumlah Tiket  : <input type="text" value="<?php echo $tampil['jum_tiket']; ?>" style="width: 300px;" name="jum_tiket">
			</div>
			<div class="input-group">
				Harga Tiket    : <input type="text" value="<?php echo $tampil['harga_tiket']; ?>" style="width: 300px;" name="harga">
			</div>
			<div class="input-group">
				Total Bayar   : <input type="text" value="<?php echo $tampil['total_bayar']; ?>" style="width: 500px;" name="total">
			</div>
			<div class="input-group">
				ID Reservasi: <select name="reservasi" value="<?php echo $tampil['id_reservasi']; ?>" id="" style="width: 250px;">
					<option value="0">-Pilih ID Reservasi-</option>
					<?php 
					$sql = "SELECT * FROM reservasi ORDER BY id_reservasi DESC"; 
					$hasil=mysqli_query($conn,$sql) or die(mysqli_error());
					while($rows=mysqli_fetch_array($hasil)){
						echo "<option value='". $rows['id_reservasi']."'>". $rows['id_reservasi']."</option>"; 
					}
					?>
				</select>
			</div>
			<div class="input-group">
				ID Tiket: <select name="tiket" value="<?php echo $tampil['id_tiket']; ?>" id="" style="width: 250px;">
					<option value="0">-Pilih ID Tiket-</option>
					<?php 
					$sql = "SELECT * FROM tiket ORDER BY id_tiket DESC"; 
					$hasil=mysqli_query($conn,$sql) or die(mysqli_error());
					while($rows=mysqli_fetch_array($hasil)){
						echo "<option value='". $rows['id_tiket']."'>". $rows['id_tiket']."</option>"; 
					}
					?>
				</select>
			</div>
			<div class="input-group">
				<button type="submit" class="btn">Kirim</button>
				<button type="reset" class="btn">Hapus</button>
			</div>

		</form>
	</div>
</div>



<?php include('template/footer.php'); }?>
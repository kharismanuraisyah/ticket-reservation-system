<?php 
include('koneksi/conn.php');
include('template/top.php');
include('template/navigasi.php');
$no = 1;
 if(!isset($_SESSION)){
 	session_start();
 }
 if (empty($_SESSION['username'])) {
 	header('Location:login.php');
 }
?>

<div id="main">
	<div class="content">
		<h3>Entry Transaksi</h3>
		<form action="inserttransaksi.php" method="POST">
			<div class="input-group">
				Tanggal Pembayaran: <input type="date" placeholder="Tanggal Pembayaran" name="tgl_bayar">
			</div>
			<div class="input-group">
				Jumlah Tiket  : <input type="text" placeholder="Jumlah Tiket" style="width: 300px;" name="jum_tiket">
			</div>
			<div class="input-group">
				Harga Tiket    : <input type="text" placeholder="Harga Tiket" style="width: 300px;" name="harga">
			</div>
			<div class="input-group">
				Total Bayar   : <input type="text" placeholder="Total Bayar" style="width: 500px;" name="total">
			</div>
			<div class="input-group">
				ID Reservasi: <select name="reservasi" id="" style="width: 250px;">
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
				ID Tiket: <select name="tiket" id="" style="width: 250px;">
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
		<hr/>
		<h3>Data Tujuan</h3>
		<?php include('data/data_transaksi.php'); ?>
	</div>
</div>


<?php include('template/footer.php'); ?>
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
		<h3>Entry Tiket</h3>
		<form action="inserttiket.php" method="POST">
			<div class="input-group">
				ID Kereta:<select name="id_kereta" id="" style="width: 250px;">
					<option value="0">-Pilih Kereta berdasarkan kode-</option>
					<?php 
					$sql = "SELECT * FROM kereta ORDER BY id_kereta DESC"; 
					$hasil=mysqli_query($conn,$sql) or die(mysqli_error());
					while($rows=mysqli_fetch_array($hasil)){
						echo "<option value='". $rows['id_kereta']."'>". $rows['id_kereta']."</option>"; 
					}
					?>
				</select>
			</div>
			<div class="input-group">
				Jadwal Keberangkatan:<input type="text" placeholder="Tanggal, waktu keberangkatan" style="width: 300px;" name="jadwal">
			</div>
			<div class="input-group">
				Pesan Tiket:<select name="gerbong" id="no">
					<option value='0'>-Pilih Nomor Gerbong-</option>
					<?php  for($no=1;$no<=12;$no++) echo "<option value='".$no."'>$no</option>" ?>
				</select>
				<select name="kursi" id="nok">
					<option value='0'>-Pilih Nomor Kursi-</option>
					<?php  for($nok=1;$nok<=16;$nok++) echo "<option value='".$nok."'>$nok</option>" ?>
				</select>
				<select name="AB" id="">
				<option value='0'>-Bagian Kursi-</option>
					<option value="A">A</option>
					<option value="B">B</option>
					<option value="C">C</option>
					<option value="D">D</option>
				</select>
			</div>
			<div class="input-group">
				<button type="submit" class="btn">Kirim</button>
				<button type="reset" class="btn">Hapus</button>
			</div>

		</form>

		<hr/>
		<h3>Data Tiket</h3>
		<?php include('data/data_tiket.php'); ?>
	</div>
</div>

<?php include('template/footer.php'); ?>
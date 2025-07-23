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
		<h3>Entry Reservasi</h3>
		<form action="insertreservasi.php" method="POST">
			<div class="input-group">
				ID Konsumen  : <select name="id_kereta" id="" style="width: 250px;">
					<option value="0">-Pilih ID Konsumen-</option>
					<?php 
					$sql = "SELECT * FROM penumpang ORDER BY id_penumpang DESC"; 
					$hasil=mysqli_query($conn,$sql) or die(mysqli_error());
					while($rows=mysqli_fetch_array($hasil)){
						echo "<option value='". $rows['id_penumpang']."'>". $rows['id_penumpang']."</option>"; 
					}
					?>
				</select>
				</div>
			<div class="input-group">
				ID Kereta     : <select name="id_kereta" id="" style="width: 250px;">
					<option value="0">-Pilih ID Kereta</option>
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
				Tanggal Keberangkatan   : <select name="jadwal" id="tanggal">
					<option value='0'>-Pilih Tanggal-</option>
					<?php  for($tanggal=1;$tanggal<=31;$tanggal++) echo "<option value='".$tanggal."'>$tanggal</option>" ?>
				</select>
				<select name="bln" id="bulan">
					<?php $bulan = array("-Pilih Bulan-","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
					for($i=0;$i<=12;$i++)
					{
						echo "<option value=".$i.">".$bulan[$i]."</option>" ."<br>";
					}
					?>
				</select>
				<?php error_reporting(1); ?>
				<select name="thn" id="tahun" onchange="document.getElementById('dat').value=2016-this.options[this.selectedIndex].text">
				<option>-Pilih Tahun-<?php echo $_POST['tahun']?>
						<?php for($t=1990;$t<2016;$t++){?> <option><?php echo $t ?></option> 
						<?php };?>
					</select>
				</div>
				<div class="input-group">
				Tanggal Pemesanan   : <input type="date" name="pesan">
				</div>
				<div class="input-group">
				<button type="submit" class="btn">Kirim</button>
				<button type="reset" class="btn">Hapus</button>
			</div>

		</form>
		<hr/>
		<h3>Data Reservasi</h3>
		<?php include('data/data_reservasi.php'); ?>
	</div>
</div>


<?php include('template/footer.php'); ?>
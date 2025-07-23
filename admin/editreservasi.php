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
$id=$_GET['id_pegawai'];

$no=1;
$sql = "SELECT * FROM tbl_pegawai WHERE no_pegawai='$id' "; 
$hasil=mysqli_query($conn,$sql) or die(mysqli_error());
while ($tampil=mysqli_fetch_array($hasil))
{

?>
<div id="main">
	<div class="content">
		<h3>Edit Reservasi</h3>
		<form action="updatereservasi.php" method="POST" enctype="multipart/form-data">
			<div class="input-group">
				ID Konsumen  : <select name="id_kereta" value="<?php echo $tampil['id_penumpang']; ?>" id="" style="width: 250px;">
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
				ID Kereta     : <select name="id_kereta" id="" value="<?php echo $tampil['id_kereta']; ?>" style="width: 250px;">
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
				Tanggal Keberangkatan   : <select name="jadwal" id="tanggal" value="<?php echo $tampil['tgl_berangkat']; ?>">
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
				<select name="thn" value="<?php echo $tampil['no_tiket']; ?>" id="tahun" onchange="document.getElementById('dat').value=2016-this.options[this.selectedIndex].text">
				<option>-Pilih Tahun-<?php echo $_POST['tahun']?>
						<?php for($t=1990;$t<2016;$t++){?> <option><?php echo $t ?></option> 
						<?php };?>
					</select>
				</div>
				<div class="input-group">
				Tanggal Pemesanan   : <input type="date" value="<?php echo $tampil['tgl_pesan']; ?>" name="pesan">
				</div>
				<div class="input-group">
					<button type="submit" class="btn">Kirim</button>
					<button type="reset" class="btn">Hapus</button>
				</div>

			</form>
		</div>
	</div>


	<?php include('template/footer.php'); } ?>
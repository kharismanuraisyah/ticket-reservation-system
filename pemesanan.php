<?php 
include('koneksi/conn.php');
include('template/top.php');
include('template/navigasi.php');

?>


<div id="main">
	<div class="content">
		<h3>Reservasi</h3>
		<form action="insertpenumpang.php" method="POST" enctype="multipart/form-data">
			<div class="input-group">
				Tanggal Pemesanan: <input type="date" name="pesan">
			</div>
			<div class="input-group">
				Nomor Identitas  : <input type="text" placeholder="Nomor Identitas" style="width: 300px;" name="id_penumpang">
			</div>
			<div class="input-group">
				Nama Pemesan     : <input type="text" placeholder="Nama" style="width: 300px;" name="nm_penumpang">
			</div>
			<div class="input-group">
				Alamat Pemesan   : <input type="text" placeholder="Alamat" style="width: 500px;" name="alamat">
			</div>
			<div class="input-group">
				Jenis Kelamin    :	<select name="gender" id="">
					<option value="">-Pilih Jenis Kelamin-</option>
						<option value="perempuan">Perempuan</option>
						<option value="laki-laki">Laki-laki</option>
					</select>
			</div>
			<div class="input-group">
				Nomor Telepon: <input type="text" placeholder="Nomor Telepon" style="width: 300px;"  name="no_telepon">
			</div>
			<div class="input-group">
				Kereta yang Dipesan: <select name="id_kereta" id="" style="width: 250px;">
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
				Tanggal Berangkat:<input type="text" placeholder="Tanggal Berangkat" style="width: 300px;" name="jadwal">
			</div>
			<div class="input-group">
					<center><button  type="reset" class="btn btn-danger">Batal</button>
					<button  class="btn btn-danger">Kirim</button></center>
			</div>
		</form>
	</div>
</div>

<?php include('template/footer.php'); ?>
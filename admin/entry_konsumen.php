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

?>


<div id="main">
	<div class="content">
		<h3>Konsumen</h3>
		<form action="insertpenumpang.php" method="POST" enctype="multipart/form-data">
			<div class="input-group">
				Nomor Identitas  : <input type="text" placeholder="Nomor Identitas" style="width: 300px;" name="id_penumpang">
			</div>
			<div class="input-group">
				Nama    : <input type="text" placeholder="Nama" style="width: 300px;" name="nm_penumpang">
			</div>
			<div class="input-group">
				Alamat  : <input type="text" placeholder="Alamat" style="width: 500px;" name="alamat">
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
					<button type="submit" class="btn">Kirim</button>
					<button type="reset" class="btn">Hapus</button>
				</div>

			</form>
			<hr/>
			<h3>Data Konsumen</h3>
			<?php include('data/data_konsumen.php') ?>
		</div>
	</div>


	<?php include('template/footer.php'); ?>
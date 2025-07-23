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

$id=$_GET['idp'];

$no=1;
$sql = "SELECT * FROM penumpang WHERE id_penumpang='$id' "; 
$hasil=mysqli_query($conn,$sql) or die(mysqli_error());
while ($tampil=mysqli_fetch_array($hasil))
{


	?>


	<div id="main">
		<div class="content">
			<h3>Edit Konsumen</h3>
			<form action="updatekonsumen.php" method="POST" enctype="multipart/form-data">
				<div class="input-group">
					Nomor Identitas<input type="text" value="<?php echo $id; ?>" name="id_penumpang">
				</div>
			<div class="input-group">
				Nama    : <input type="text" value="<?php echo $tampil['nm_penumpang']; ?>" style="width: 300px;" name="nm_penumpang">
			</div>
			<div class="input-group">
				Alamat  : <input type="text" value="<?php echo $tampil['alamat']; ?>" style="width: 500px;" name="alamat">
			</div>
			<div class="input-group">
				Jenis Kelamin    :	<select name="gender" value="<?php echo $tampil['gender']; ?>" id="">
					<option value="">-Pilih Jenis Kelamin-</option>
						<option value="perempuan">Perempuan</option>
						<option value="laki-laki">Laki-laki</option>
					</select>
			</div>
			<div class="input-group">
				Nomor Telepon: <input type="text" value="<?php echo $tampil['no_telp']; ?>" style="width: 300px;"  name="no_telepon">
			</div>
					<div class="input-group">
						<button type="submit" class="btn">Kirim</button>
						<button type="reset" class="btn">Hapus</button>
					</div>

				</form>
			</div>
		</div>


		<?php include('template/footer.php');} ?>
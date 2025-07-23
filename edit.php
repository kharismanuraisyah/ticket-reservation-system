<?php 

include('koneksi/conn.php'); 
include('template/top.php');
include('template/navigasi.php');


        $idpnp  = $_POST['inputid'];

		$querypesan 			= $sql = "SELECT * FROM penumpang WHERE id_penumpang='$idpnp' "; 
		$cekquery				= mysqli_query($conn, $querypesan)or die(mysqli_error($conn));
		$tampil 					= mysqli_fetch_array($cekquery);
        
		$idrev  = $_POST['input'];

		$querypesan1 			= $sql = "SELECT * FROM reservasi WHERE id_reservasi='$idrev' "; 
		$cekquery1				= mysqli_query($conn, $querypesan1)or die(mysqli_error($conn));
		$tampil1				= mysqli_fetch_array($cekquery1);
							?>

		<div class="content">
		<h3>Reservasi</h3>
		<form action="updatepemesanan.php" method="POST" enctype="multipart/form-data">
			<div class="input-group">
				Tanggal Pemesanan: <input type="date" name="pesan" value="<?php echo $tampil1['tgl_pesan']; ?>" name="id_penumpang">
			</div>
			<div class="input-group">
				Nomor Identitas  : <input type="text" placeholder="Nomor Identitas" style="width: 300px;" value="<?php echo $tampil['id_penumpang']; ?>" name="id_penumpang">
			</div>
			<div class="input-group">
				Nama Pemesan     : <input type="text" placeholder="Nama" style="width: 300px;" value="<?php echo $tampil['nm_penumpang']; ?>" name="nm_penumpang">
			</div>
			<div class="input-group">
				Alamat Pemesan   : <input type="text" placeholder="Alamat" style="width: 500px;" value="<?php echo $tampil['alamat']; ?>" name="alamat">
			</div>
			<div class="input-group">
				Jenis Kelamin    :	<select value="<?php echo $tampil['gender']; ?>" name="gender" id="">
					<option value="">-Pilih Jenis Kelamin-</option>
						<option value="perempuan">Perempuan</option>
						<option value="laki-laki">Laki-laki</option>
					</select>
			</div>
			<div class="input-group">
				Nomor Telepon: <input type="text" placeholder="Nomor Telepon" style="width: 300px;"  value="<?php echo $tampil['no_telp']; ?>" name="no_telepon">
			</div>
			<div class="input-group">
				Kereta yang Dipesan: <select value="<?php echo $tampil1['id_kereta']; ?>" name="id_kereta" id="" style="width: 250px;">
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
				Tanggal Berangkat:<input type="text" placeholder="Tanggal Berangkat" style="width: 300px;" value="<?php echo $tampil1['tgl_berangkat']; ?>"name="jadwal">
			</div>
			<div class="input-group">
					<center><button  type="reset" class="btn btn-danger">Batal</button>
					<button  class="btn btn-danger">Kirim</button></center>
			</div>
		</form>
	</div>

	<?php include('template/footer.php'); ?>
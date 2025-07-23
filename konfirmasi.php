<?php 
include('koneksi/conn.php');
include('template/top.php');
include('template/navigasi.php');

$id=$_GET['id_reservasi'];

$sql = "SELECT * FROM reservasi inner join penumpang on reservasi.id_penumpang=penumpang.id_penumpang join kereta on reservasi.id_kereta=kereta.id_kereta WHERE id_reservasi='$id' "; 
$hasil=mysqli_query($conn,$sql) or die(mysqli_error($conn));
while ($tampil=mysqli_fetch_array($hasil))

{
?>

<div id="main">
	<div class="content">
		<center><h2>Konfirmasi Reservasi</h2></center>
			<br>
			<h4>Nama Pemesan : <?php echo $tampil['nm_penumpang']; ?></h4>
			<h3>ID Reservasi: <?php echo $tampil['id_reservasi']; ?></h3>
			<br><br>
			<form action="konfiroke.php" method="GET">
			<input type="hidden" name="id_penumpang" value="<?php echo $tampil['id_penumpang']; ?>">
				<table class="table table-striped-bordered">
					
					<tr>
						<td width="200">No Identitas</td>
						<td width="50">:</td>
						<td><?php echo $tampil['id_penumpang']; ?></td>
					</tr>
					<tr>
						<td width="200">Alamat</td>
						<td width="50">:</td>
						<td><?php echo $tampil['alamat']; ?></td>
					</tr>
					<tr>
						<td width="200">Jenis Kelamin</td>
						<td width="50">:</td>
						<td><?php echo $tampil['gender']; ?></td>
					</tr>
					<tr>
						<td width="200">Nomor Telepon</td>
						<td width="50">:</td>
						<td><?php echo $tampil['no_telp']; ?></td>
					</tr>
					<tr>
						<td width="200">ID Kereta</td>
						<td width="50">:</td>
						<td><?php echo $tampil['id_kereta']; ?></td>
					</tr>
					<tr>
						<td width="200">Nama Kereta</td>
						<td width="50">:</td>
						<td><?php echo $tampil['nm_kereta']; ?></td>
					</tr>
					<tr>
						<td width="200">Kelas Kereta</td>
						<td width="50">:</td>
						<td><?php echo $tampil['kls_kereta']; ?></td>
					</tr>
					<tr>
						<td width="200">Stasiun Asal</td>
						<td width="50">:</td>
						<td><?php echo $tampil['stasiun_asal']; ?></td>
					</tr>
					<tr>
						<td width="200">Stasiun Tujuan</td>
						<td width="50">:</td>
						<td><?php echo $tampil['stasiun_tujuan']; ?></td>
					</tr>
					<tr>
						<td width="200">Tanggal Keberangkatan</td>
						<td width="50">:</td>
						<td><?php echo $tampil['tgl_berangkat']; ?></td>
					</tr>
					<tr>
						<td width="200">Jam Keberangkatan</td>
						<td width="50">:</td>
						<td><?php echo $tampil['jam_berangkat']; ?></td>
					</tr>
				</table>
				<button class="print" onclick="PrintDoc()"><img src="http://localhost/sibd/img/print.png">Print Reservasi</button>
						<center><td><button class="btn"><a href="index.php">Oke</button></td></a></center>
				</form>


				</br></br></br>
		</div>
</div>

<?php include('template/footer.php'); } ?>
<?php 
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
		<h3>Data Reservasi Kereta Api</h3>
		<button class="print" onclick="PrintDoc()"><img src="http://localhost/sibd/img/print.png">Print Data</button>
		<button class="print" onclick="PrintPreview()"><img src="http://localhost/sibd/img/preview.png">Print Preview</button>
		<table id="tabel"  border="1" cellpadding="3" >
			<tr>
				<th style="width: 20px;">No</th>
				<th style="width: 50px;">ID Reservasi</th>
				<th style="width: 100px;">ID Konsumen</th>
				<th style="width: 140px;">ID Kereta</th>
				<th style="width: 140px;">Tanggal Keberangkatan</th>
				<th style="width: 140px;">Tanggal Pemesanan</th>
			</tr>
			<?php include('koneksi/conn.php'); 
			$sql = "SELECT * FROM reservasi ORDER BY id_penumpang ASC"; 
			$hasil=mysqli_query($conn,$sql) or die(mysqli_error());
			$no=1;
			while ($data = mysqli_fetch_array ($hasil)){
				$id=$data['id_penumpang'];
				?>
				<tr>

					<td><?php echo $no++?></td>
					<td><?php echo $data['id_reservasi'];?></td>
					<td><?php echo $data['id_penumpang']; ?></td>
					<td><?php echo $data['id_kereta']; ?></td>
					<td><?php echo $data['tgl_berangkat']; ?></td>
					<td><?php echo $data['tgl_pesan']; ?></td>

				</tr>
				<?php } ?>
			</table>
		</div>
	</div>
	<?php include('template/footer.php'); ?>
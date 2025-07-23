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
		<h3>Data Transaksi Pemesanan Kereta Api</h3>
		<button class="print" onclick="PrintDoc()"><img src="http://localhost/sibd/img/print.png">Print Data</button>
		<button class="print" onclick="PrintPreview()"><img src="http://localhost/sibd/img/preview.png">Print Preview</button>
		<table id="tabel"  border="1" cellpadding="3" >
			<tr>
				<th style="width: 20px;">No</th>
				<th style="width: 50px;">ID Transaksi</th>
				<th style="width: 140px;">Tanggal Pembayaran</th>
				<th style="width: 40px;">Jumlah Tiket</th>
				<th style="width: 90px;">Harga Tiket</th>
				<th style="width: 90px;">Total Bayar</th>
				<th style="width: 50px;">ID Reservasi</th>
				<th style="width: 50px;">ID Tiket</th>
			</tr>
			<?php include('koneksi/conn.php'); 
			$sql = "SELECT * FROM transaksi ORDER BY id_tiket ASC"; 
			$hasil=mysqli_query($conn,$sql) or die(mysqli_error());
			$no=1;
			while ($data = mysqli_fetch_array ($hasil)){
				$id=$data['id_tiket'];
				?>
				<tr>

					<td><?php echo $no++?></td>
					<td><?php echo $data['id_transaksi'];?></td>
					<td><?php echo $data['tgl_bayar']; ?></td>
					<td><?php echo $data['jum_tiket']; ?></td>
					<td>Rp <?php echo $data['harga_tiket']; ?></td>
					<td>Rp <?php echo $data['total_bayar']; ?></td>
					<td><?php echo $data['id_reservasi']; ?></td>
					<td><?php echo $data['id_tiket']; ?></td>

				</tr>
				<?php } ?>
			</table>
		</div>
	</div>
	<?php include('template/footer.php'); ?>
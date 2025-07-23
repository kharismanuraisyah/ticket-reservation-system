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
		<h3>Data Tiket Kereta Api</h3>
		<button class="print" onclick="PrintDoc()"><img src="http://localhost/sibd/img/print.png">Print Data</button>
		<button class="print" onclick="PrintPreview()"><img src="http://localhost/sibd/img/preview.png">Print Preview</button>

		<table id="tabel"  border="1" cellpadding="3" >
			<tr>
				<center><th style="width: 20px;">No</th>
				<th style="width: 80px;">ID Tiket</th></center>
				<th style="width: 80px;">ID Kereta</th></center>
				<th style="width: 140px;">Jadwal Keberangkatan</th>
				<center><th style="width: 50px;">No Gerbong</th>
				<th style="width: 50px;">No Kursi</th></center>
			</tr>
			<?php include('koneksi/conn.php'); 
			$sql = "SELECT * FROM tiket ORDER BY id_tiket ASC"; 
			$hasil=mysqli_query($conn,$sql) or die(mysqli_error());
			$no=1;
			while ($data = mysqli_fetch_array ($hasil)){
				$id=$data['id_tiket'];
				?>
				<tr>

					<td><?php echo $no++?></td>
					<td><?php echo $data['id_tiket'];?></td>
					<td><?php echo $data['id_kereta']; ?></td>
					<td><?php echo $data['jadwal']; ?></td>
					<td><?php echo $data['no_gerbong']; ?></td>
					<td><?php echo $data['no_kursi']; ?></td>

				</tr>
				<?php } ?>
			</table>
		</div>
	</div>
	<?php include('template/footer.php'); ?>
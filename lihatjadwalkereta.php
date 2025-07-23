<?php 
include('template/top.php');
include('template/navigasi.php');

?>
<div id="main">
	<div class="content">
		<h3>Jadwal Kereta Api</h3>
<button class="print" onclick="PrintDoc()"><img src="http://localhost/sibd/img/print.png">Print Data</button>
<button class="print" onclick="PrintPreview()"><img src="http://localhost/sibd/img/preview.png">Print Preview</button>
<table id="tabel"  border="1" cellpadding="3" >
	<tr>
		<th style="width: 20px;">No</th>
		<th>Stasiun Asal</th>
		<th>Stasiun Tujuan</th>
		<th style="width: 140px;">Nama Kereta</th>
		<th>Kelas</th>
		<th>Harga</th>
		<th style="width: 100px;">Waktu Keberangkatan</th>
	</tr>
	<?php include('koneksi/conn.php'); 
	$sql = "SELECT * FROM kereta ORDER BY id_kereta ASC"; 
	$hasil=mysqli_query($conn,$sql) or die(mysqli_error());
	$no=1;
	while ($data = mysqli_fetch_array ($hasil)){
		$id=$data['id_kereta'];
		$asal=$data['stasiun_asal'];
		$tujuan=$data['stasiun_tujuan'];
		$nm=$data['nm_kereta'];
		$kls=$data['kls_kereta'];
		$hrg=$data['harga_tiket'];
		$jam=$data['jam_berangkat'];

		?>
		<tr>

			<td><?php echo $id;?></td>
			<td><?php echo $asal; ?></td>
			<td><?php echo $tujuan; ?></td>
			<td><?php echo $nm; ?></td>
			<td><?php echo $kls; ?></td>
			<td><?php echo $hrg; ?></td>
			<td><?php echo $jam; ?></td>
			
		</tr>
		<?php } ?>
	</table>
</div>
</div>
<?php include('template/footer.php'); ?>
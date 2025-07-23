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
		<h3>Data Konsumen Kereta Api</h3>
<button class="print" onclick="PrintDoc()"><img src="http://localhost/sibd/img/print.png">Print Data</button>
<button class="print" onclick="PrintPreview()"><img src="http://localhost/sibd/img/preview.png">Print Preview</button>
<table id="tabel"  border="1" cellpadding="3" >
	<tr>
		<th style="width: 20px;">No</th>
		<th style="width: 100px;">Nomor Indentitas</th>
		<th style="width: 140px;">Nama Konsumen</th>
		<th>Alamat</th>
		<th>Nomor Telepon</th>
	</tr>
	<?php include('koneksi/conn.php'); 
	$sql = "SELECT * FROM penumpang ORDER BY id_penumpang ASC"; 
	$hasil=mysqli_query($conn,$sql) or die(mysqli_error());
	$no=1;
	while ($data = mysqli_fetch_array ($hasil)){
		$id=$data['id_penumpang'];
		$nm=$data['nm_penumpang'];
		$alamat=$data['alamat'];
		$nohp=$data['no_telp'];

		?>
		<tr>

			<td><?php echo $no++?></td>
			<td><?php echo $id;?></td>
			<td><?php echo $nm; ?></td>
			<td><?php echo $alamat; ?></td>
			<td><?php echo $nohp; ?></td>
		<?php } ?>
	</table>
</div>
</div>
<?php include('template/footer.php'); ?>
<?php 
include('koneksi/conn.php');
include('template/top.php');

$id=$_GET['id_transaksi'];

$sql = "SELECT * FROM transaksi WHERE id_transaksi='$id' "; 
$hasil=mysqli_query($conn,$sql) or die(mysqli_error($conn));
while ($tampil=mysqli_fetch_array($hasil))

{
?>

<div id="main">
	<div class="content">
		<center><h2>Konfirmasi</h2></center>
			<br>
			<h4>ID Transaksi : <?php echo $tampil['id_transaksi']; ?></h4>
			<br><br>
			<form action="oke.php" method="GET">
				<table class="table table-striped-bordered">
					
					<tr>
						<td width="200">Tanggal Pembayaran</td>
						<td width="50">:</td>
						<td><?php echo $tampil['tgl_bayar']; ?></td>
					</tr>
					<tr>
						<td width="200">Jumlah Tiket</td>
						<td width="50">:</td>
						<td><?php echo $tampil['jum_tiket']; ?></td>
					</tr>
					<tr>
						<td width="200">Harga Tiket</td>
						<td width="50">:</td>
						<td><?php echo $tampil['harga_tiket']; ?></td>
					</tr>
					<tr>
						<td width="200">Total Pembayaran</td>
						<td width="50">:</td>
						<td><?php echo $tampil['total_bayar']; ?></td>
					</tr>
					<tr>
						<td width="200">ID Reservasi</td>
						<td width="50">:</td>
						<td><?php echo $tampil['id_reservasi']; ?></td>
					</tr>
					<tr>
						<td width="200">ID Tiket</td>
						<td width="50">:</td>
						<td><?php echo $tampil['id_tiket']; ?></td>
					</tr>
				</table>
				<button class="print" onclick="PrintDoc()"><img src="http://localhost/sibd/img/print.png">Print Reservasi</button>
						<center><td><button class="btn"><a href="index.php">Oke</button></td></a></center>
				</form>


				</br></br></br>
		</div>
</div>

<?php include('template/footer.php'); } ?>
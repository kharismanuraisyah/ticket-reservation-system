<?php 
include('koneksi/conn.php');
include('template/top.php');

?>


<div id="main">
	<div class="content">
		<h3>Transaksi</h3>
		<form action="inserttransaksi.php" method="POST">
				<table class="table table-striped-bordered">
					
					<tr>
						<td width="200">ID Reservasi</td>
						<td width="50">:</td>
						<td><input type="text" placeholder="ID Reservasi" style="width: 300px;" name="id_reservasi"></td>
					</tr>
					<tr>
						<td width="200">Tanggal Pembayaran</td>
						<td width="50">:</td>
						<td><input type="text" placeholder="Tanggal Pembayaran" style="width: 300px;" name="tgl_bayar"></td>
					</tr>
					<tr>
						<td width="200">Jumlah Tiket</td>
						<td width="50">:</td>
						<td><input type="text" placeholder="Jumlah Tiket" style="width: 300px;" name="jum_tiket"></td>
					</tr>
					<tr>
						<td width="200">Harga Tiket</td>
						<td width="50">:</td>
						<td><input type="text" placeholder="Harga Tiket" style="width: 300px;" name="harga"></td>
					</tr>
					<tr>
						<td width="200">Total Bayar</td>
						<td width="50">:</td>
						<td><input type="text" placeholder="Total Bayar" style="width: 300px;" name="total"></td>
					</tr>
					<tr>
						<td width="200">Dapatkan Tiket</td>
						<td width="50">:</td>
						<td><h2><button><a href="tiket.php">Tiket</a></button></h2></td>
					</tr>
					<tr>
						<td width="200">ID Tiket</td>
						<td width="50">:</td>
						<td><input type="text" placeholder="ID Tiket" style="width: 300px;" name="id_tiket"></td>
					</tr>
					
				</table>
			<div class="input-group">
					<center><button  type="reset" class="btn btn-danger">Batal</button>
					<button  class="btn btn-danger">Kirim</button></center>
			</div>
		</form>
	</div>
</div>

<?php include('template/footer.php'); ?>

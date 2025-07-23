<table id="tabel"  border="1" cellpadding="3" >
	<tr>
		<th style="width: 20px;">No</th>
				<th style="width: 50px;">ID Transaksi</th>
				<th style="width: 140px;">Tanggal Pembayaran</th>
				<th style="width: 40px;">Jumlah Tiket</th>
				<th>Harga Tiket</th>
				<th>Total Bayar</th>
				<th style="width: 50px;">ID Reservasi</th>
				<th style="width: 50px;">ID Tiket</th>
				<th style="width: 40px;">Delete</th>
				<th style="width: 40px;">Edit</th>
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
			<td class="delete">
				<a href="deletetransaksi.php?id_pembayaran=<?php echo $id ?>" onclick="return confirm('Apakah anda yakin?')" class="btn-aksi"> <img src="img/delete.png" alt="Delete Data"></a>
			</td>
			<td class="edit">
				<a href="edittransaksi.php?id_pembayaran=<?php echo $id?>" class="btn-aksi"><img src="img/edit.png" alt="Edit Dasta"></a>
			</td>
			
		</tr>
		<?php } ?>
	</table>

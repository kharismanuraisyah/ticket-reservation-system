<table id="tabel"  border="1" cellpadding="3" >
	<tr>
		<th style="width: 20px;">No</th>
		<th style="width: 50px;">ID Reservasi</th>
		<th style="width: 100px;">ID Konsumen</th>
		<th style="width: 140px;">ID Kereta</th>
		<th style="width: 140px;">Tanggal Keberangkatan</th>
		<th style="width: 140px;">Tanggal Pemesanan</th>
		<th style="width: 40px;">Delete</th>
		<th style="width: 40px;">Edit</th>
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
			<td class="delete">
				<a href="deletereservasi.php?id_tujuan=<?php echo $id ?>" onclick="return confirm('Apakah anda yakin?')" class="btn-aksi"> <img src="img/delete.png" alt="Delete Data"></a>
			</td>
			<td class="edit">
				<a href="editreservasi.php?id_tujuan=<?php echo $id?>" class="btn-aksi"><img src="img/edit.png" alt="Edit Dasta"></a>
			</td>
			
		</tr>
		<?php } ?>
	</table>

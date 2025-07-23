<table id="tabel"  border="1" cellpadding="3" >
	<tr>
		<center><th style="width: 20px;">No</th>
				<th style="width: 80px;">ID Tiket</th></center>
				<th style="width: 80px;">ID Kereta</th></center>
				<th style="width: 140px;">Jadwal Keberangkatan</th>
				<center><th style="width: 50px;">No Gerbong</th>
				<th style="width: 50px;">No Kursi</th></center>
		<th style="width: 40px;">Delete</th>
		<th style="width: 40px;">Edit</th>
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
			<td class="delete">
				<a href="deletetiket.php?id_tiket=<?php echo $id ?>" onclick="return confirm('Apakah anda yakin?')" class="btn-aksi"> <img src="img/delete.png" alt="Delete Data"></a>
			</td>
			<td class="edit">
				<a href="edittiket.php?id_tiket=<?php echo $id?>" class="btn-aksi"><img src="img/edit.png" alt="Edit Data"></a>
			</td>
			
		</tr>
		<?php } ?>
	</table>

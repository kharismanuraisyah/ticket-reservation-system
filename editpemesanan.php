<?php 
include('koneksi/conn.php');
include('template/top.php');
include('template/navigasi.php');

?>

<div id="main">
<div class="content">
		<h3>Edit Pemesanan</h3>
    <br>
    <div class="content">
	<main>
	<form class="form-inline" action="edit.php" method="POST">
        <div class="form-group">
            <label class="control-label col-sm-4">Nomor ID Reservasi :</label>
		<div class="input-group">
					<input type="text" name="input" placeholder="ID Reservasi" style="width: 280px;">
				</div>
				<label class="control-label col-sm-4">Nomor Identitas :</label>
		<div class="input-group">
					<input type="text" name="inputid" placeholder="Nomor Identitas" style="width: 280px;">
				</div>
        <div class="form-group">
            <label class="control-label col-sm-4"></label>
            <div class="col-sm-7" align="center">
                <button type="submit" class="btn btn-primary" style="width: 100px;" name="submit">EDIT</button>
            </div>
        </div>
    
</div>
</div>
</div>
</div>
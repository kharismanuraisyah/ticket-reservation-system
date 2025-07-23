<?php 
include('koneksi/conn.php');
include('template/top.php');

?>
<br>
		<center>
    <br>
    <div class="content">
	<main>
	<form action="konfirmasi.php" method="POST">
	<br/>
        <div class="form-group">
            <label class="control-label col-sm-4">Nomor ID Reservasi :</label>
		<div class="input-group">
		<input type="text" name="id_reservasi" placeholder="ID Reservasi" style="width: 280px;">
		</div>
		<div class="input-group">
            <label class="control-label col-sm-4"></label>
            <div class="col-sm-7" align="center">
                <button type="submit" class="btn btn-primary" style="width: 100px;" name="submit">CEK</button>
            </div>
        </div>
		</div>
    </form>
	</main>
</div>
</main>
<?php include('template/footer.php'); ?>

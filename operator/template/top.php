
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Transaksi</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/sibd/style.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/sibd/animate.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/sibd/font/Oxygen.css">

	<script type="text/javascript">
		function calculate() {
		var myBox1 = document.getElementById('jumlah').value;	
		var myBox2 = document.getElementById('harga').value;
		var result = document.getElementById('total');	
		var myResult = myBox1 * myBox2;
		result.value = myResult;
      
		
	}
</script>
</head>
<body>
	<div class="container">

		<header>
			<div class="header_content">
				<h1>TRANSAKSI TIKET KERETA API</h1>
			</div>
		</header>
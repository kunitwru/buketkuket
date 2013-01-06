<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ORDER</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<h1>Order</h1>
<form method="post" action="order_process.php">
	<p>
		Nama: <br />
		<input type="text" name="nama">
	</p>
	<p>
		Alamat: <br />
		<textarea name="alamat"></textarea>
	</p>	
	<p>
		Buku: <br />
		<select name="buku">
		<?php
		$user = 'root';
		$host = 'localhost';
		$link = mysql_connect($host, $user,'');
		if (!$link) {
		die ('tidak connect ni:' . mysql_error());
		}
		mysql_select_db('rbpl');
		$result = mysql_query("SELECT * FROM buku");
		while($data = mysql_fetch_array($result)){
			echo "<option value='$data[id_buku]'>$data[nama_buku] : Rp. $data[harga_buku]</option>";
		}
		?>
		</select>
	</p>
	<p>
		Jumlah: <br />
		<input type="text" name="jumlah" size="5">
	</p>
	<p>
		<input type="submit" value="beli" class="button">
	</p>
</form>	
</body>
</html>
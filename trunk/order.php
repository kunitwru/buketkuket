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
<div class="well">
    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab">Konfirmasi</a></li>
      <li><a href="#Konfirmasi" data-toggle="tab">BuketKuket</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
            <label>Nama</label>
            <input type="text" name="nama" class="input-xlarge">
            <label>Alamat</label>
            <textarea "rows="6" name="alamat" class="input-xlarge">
            </textarea>
            <label>Email</label>
            <input type="text"  name="email" class="input-xlarge">
			<label>Buku</label>
			<select name="buku">
			<?php
			$user = 'root';
			$host = 'localhost';
			$link = mysql_connect($host, $user,'');
			if (!$link) {
			die ('tidak connect ni:' . mysql_error());
			}
			mysql_select_db('coba');
			$result = mysql_query("SELECT * FROM buku");
			while($data = mysql_fetch_array($result)){
				echo "<option value='$data[id_buku]'>$data[nama_buku] : Rp. $data[harga]</option>";
			}
			?>
			</select>
            <label>Jumlah Pembelian</label>
            <input type="text"  name="jumlah" class="input-xlarge">
          	<div>
        	    <button type="submit" class="btn btn-primary">Beli</button> 
        	</div>
        </form>
      </div>
  </div>	
</form>	
</body>
</html>
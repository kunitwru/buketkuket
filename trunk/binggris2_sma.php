<html>
	<head><link href="css/bootstrap.css" rel="stylesheet" type="text/css">
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

	</head>
<body>
		<div class="navbar">
			<div class="navbar-inner">
				<a class="brand" href="home.php">Home</a>
				<ul class="nav">
					<li><a href="bukusd.php">Buku SD</a></li>
					<li><a href="bukusmp.php">Buku SMP</a></li>
					<li><a href="#">Buku SMA</a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					
			
							<div class="btn-group pull-right" >
								<a class="btn btn-medium" href="logout.php">
									<i class="icon-user"></i><span class="hidden-phone"> Logout</span>
									<span class="caret"></span>
								</a>
							</div>
							
	
				</ul>
				</div>
				</div>
<title>Bahasa Inggris</title>
		<body>
			<form class="form-horizontal" method="post" action="logincode.php">
				<div class="modal-header">

				<h2 align="center">Bahasa Inggris</h2>
				<h5 align="center">Berisi daftar buku Bahasa Inggris yang siap dibeli</h5>
				</div>
<?php
	include 'connect.php';
	$sql=mysql_query("select * from buku where kelas = 2 and tingkatan='SMA' and mata_pelajaran='bahasa_inggris'");
?>
	<p align="center">Daftar Buku</p>

		<div align="center">
		<form id="form1" name="form1" method="post" action="">
	<table class="table-bordered" width="1000" border="1">
		


<td width="20"><div align="center">id_buku</div></td>
<td width="20"><div align="center">id_user</div></td>
	<td width="2000"><div align="center">nama_buku</div></td>
	<td width="148"><div align="center">mata_pelajaran</div></td>
	<td width="50"><div align="center">tingkatan</div></td>
	<td width="35"><div align="center">kelas</div></td>
	<td width="50"><div align="center">jumlah</div></td>
	<td width="148"><div align="center">harga</div></td>
	<td width="148"><div align="center"></div></td>
	<div class="btn-group pull-right" >
	
							
	<?php while($kolom=mysql_fetch_array($sql)){
    ?>
	
<tr>
<td align="center"><?php echo $kolom[0];?></td>
<td><?php echo $kolom[1];?></td>
<td align="center"><?php echo $kolom[2];?></td>
	<td align="center"><?php echo $kolom[3];?></td>
	<td align="center"><?php echo $kolom[4];?></td>
	<td align="center"><?php echo $kolom[5];?></td>
	<td align="center"><?php echo $kolom[6];?></td>
	<td align="center"><?php echo $kolom[7];?></td>
	
	<td><a href="konfirmasi.php">Beli</a></td>
</tr>
	
	<?php } ?>
	</div>
</table>
</form>
</body>
</html>
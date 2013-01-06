<html>
<head> <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<title>Registrasi </title>
<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<a class="brand" href="home.php">Home</a>
				<ul class="nav">
					<li><a href="bukusdlist.php">Buku SD</a></li>
					<li><a href="bukusmplist.php">Buku SMP</a></li>
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
							
				</ul>
				</div>
				</div>

<div class="hero-unit">
  <h1><center>Upload Buku </center></h1>
</div>
<body background="2.jpg">

<!--<div class="span9">-->

	<div class align="center">
	<form method="POST" action="uploadbukucode.php">  
		<form class="form-horizontal">
			<div class="container-fluid">
				<label class="control-label" for="id_user">id_user</label>
					<div class="controls">
						<input name="id_user" id="id_user" placeholder="id_user">
					</div>
				</label>	
			</div>
			<div class="container-fluid">
				<label class="control-label" for="nama_buku">nama_buku</label>
					<div class="controls">
						<input name="nama_buku" type="nama_buku" id="nama_buku" placeholder="nama_buku">
					</div>
				</label>	
			</div>
			<div class="container-fluid">
				<label class="control-label" for="mata_pelajaran">mata_pelajaran</label>
					<div class="controls">
						<div class="control-group">
						<select name="mata_pelajaran">
						<option value="matematika">matematika</option>
						<option value="bahasa_indonesia">bahasa_indonesia</option>
						<option value="bahasa_inggris">bahasa_inggris</option>
						<option value="agama_islam">agama_islam</option>
						<option value="kewarganegaraan">kewarganegaraan</option>
						<option value="ipa">ipa</option>
						<option value="ips">ips</option>
						</select>
					</div>
				</label>	
			</div>
			<div class="container-fluid">
				<label class="control-label" for="tingkatan">tingkatan</label>
					<div class="controls">
						<div class="control-group">
						<select name="tingkatan">
						<option value="SD">SD</option>
						<option value="SMP">SMP</option>
						<option value="SMA">SMA</option>
						</select>
					</div>
				</label>	
			</div>
			<div class="container-fluid">
				<label class="control-label" for="kelas">kelas</label>
					<div class="controls">
						<div class="control-group">
						<select name="kelas">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						</select>
					</div>
				</label>	
			</div>
			<div class="container-fluid">
				<label class="control-label" for="jumlah">jumlah</label>
					<div class="controls">
						<input name="jumlah" type="jumlah" id="jumlah" placeholder="jumlah">
					</div>
				</label>	
			</div>
			<div class="container-fluid">
				<label class="control-label" for="harga">harga</label>
					<div class="controls">
						<input name="harga" type="harga" id="harga" placeholder="harga">
					</div>
				</label>	
			</div>
			
			<div class="container-fluid">
				<input type="submit" class="btn btn-medium btn-primary" name="button" value="Input">   
			</div>
			</div>
			
			</div>
		</form>
	</form>
</body>  
</html>
<html>
<head> 
<title>Registrasi </title>
</head>
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
<div class="hero-unit">
  <h1><center>Registrasi </center></h1>
</div>
<body>

<blockquote class="pull-right">
	<p><a href="home.php"><center>Masuk</center></a></p>
</blockquote>


	
	<div class="span5">
	<img src = "1005.jpg"/>
	</div>


	<div class="span5">
	<form name="input" method="post" action="daftarcode.php" enctype="multipart/form-data" >  
			<div class="control-group">
				<label class="control-label">Nama</label>
					<div class="controls">
						<input name="nama" type="text" id="nama" placeholder="Nama penerbit/Instansi">
					</div>
					
			</div>
			<div class="control-group">
				<label class="control-label" >Username</label>
					<div class="controls">
						<input name="username" type="email" id="username" placeholder="Gunakan Alamat Email">
					</div>
					
			</div>
			<div class="control-group">
				<label class="control-label">Alamat</label>
					<div class="controls">
						<input name="alamat" type="text" id="alamat">
					</div>
					
			</div>
			<div class="control-group">
				<label class="control-label" >No telepon</label>
					<div class="controls">
						<input name="no_telp" type="text" id="no_telp">
					</div>
					
			</div>
			
			<div class="control-group">
				<label class="control-label">Password</label>
					<div class="controls">
						<input name="password" type="password" id="password" placeholder="Password">
					</div>
				
			</div>
			<br/>foto
			<br/><input name="foto_profil" type="file">
						
			<div class="control-group">
				<label class="control-label">Pilihan</label>
					<div class="controls">
						<div class="control-group">
						<select name="akun">
						<option value="Penerbit">Penerbit</option>
						<option value="Sekolah">Sekolah</option>
						</select>
					</div>
				
			</div>
			</div>
			<div class="container-fluid">
				<input type="submit" id="simpan" class="btn btn-large btn-primary" name="simpan" value="Daftar">   
			</div>
		</form>
	</div>
	
	<div class="span5">
	<img src = "1005.jpg"/>
	</div>
</div>
</div>

</body>  
</html>
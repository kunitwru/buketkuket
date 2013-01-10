<html>
<head> <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

</head>
<div class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="login.php">Home</a>
    <ul class="nav">
      <li class="active"><a href="#">test</a></li>
      <li><a href="#">Buku SD</a></li>
      <li><a href="#">Buku SMP</a></li>
      <li><a href="#">Buku SMA</a></li>
	</ul>
  </div>
</div>
<title>Buket Kuket</title>
<body>
<form class="form-horizontal" method="post" action="logincode.php"> 
  <div class="modal-header">
  
  <h2>Buket Kuket</h2>
  <h5> Sistem Informasi pengadaan buku paket terintegrasi</h5>
  </div>
  
<div class="modal-body">
<div class="control-group">
<label class="control-label" for="username">Username</label>
<div class="controls">
<input type="text" name="username" placeholder="Username">
</div>
</div>
  
<div class="control-group">
<label class="control-label" for="password">Password</label>
<div class="controls">
<input type="password" name="password" placeholder="Password">
</div>
</div>
  
<div class="container-fluid">
<label class="control-label" for="pilihan">Pilihan</label>
<div class="controls">
<div class="control-group">
<select name="pilihan">
<option value="Penerbit">Penerbit</option>
<option value="Sekolah">Sekolah</option>
</select>
</div>
<br></br>
	  
<div class="control-group">
<div class="controls">
<button type="submit" class="btn">Masuk</button>
<p>Belum memiliki akun? Klik Disini untuk daftar <a href="daftar.php">disini</a></p>
</div>
</div>
  </form>
</body>
</html>
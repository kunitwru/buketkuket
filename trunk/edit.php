<html>
  <head>
    
  <title>BUKET KUKET </title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
  </head>
  <body>
  <div class="control-group">
  <label class="control-label" for="inputIcon"> </label>
  <div class="controls">
    <div class="input-prepend">
      <span class="add-on"><i class="icon-search">  </i></span>
      <input class="span3" id="inputIcon" type="text" placeholder="Pencarian">
    </div>
  </div>
</div>
  

	

<ul class="nav nav-pills">
  <li class="active">
    <a href="#">Home</a>
  </li>
  <li><a href="#">Buku SD</a></li>
  <li><a href="#">Buku SMP</a></li>
  <li><a href="#">Buku SMA</a></li>
  <li><a href="#">Tentang Kami</a></li>
</ul>

<img src="untitled.png" width="500"/>
<br>
<br>
<br>

	<div class="span5">
	<?php
	include "koneksi.php";
	$nama = "fani"; //$_SESSION['ID'];
	$tampil = "SELECT foto_profil FROM edit_profil where nama=$nama";
				
				$hasil = mysql_query($tampil);
				
				while($data = mysql_fetch_object($hasil)){
					$photo = $data->foto_profil;
					if ($photo != null){
					echo "
								<img width=\"500\" src=\"$photo\" style=\"margin-bottom:20px\"\" class=\"img-polaroid\">
								
					";
					}
					else {
					echo "

								<img width=\"500\" src=\"picture/1005.jpg\" style=\"margin-bottom:20px\"\" class=\"img-polaroid\">
					";
					}
				}
				?>
	<?php
	
	
	$allowed_types=array(
    'gif',
    'jpeg',
    'png',
);
if (in_array($_FILES["picture"]["type"], $allowed_types) && 
            ($_FILES["picture"]["size"] < 500000)) {
			
	if($_FILES["picture"]["error"] > 0) {
		//echo '<div class="alert alert-danger">Error<button class="close" data-dismiss="alert">&times;</button></div>';
		$set = false;
		}
		
	else {
		if (file_exists("picture/" . $_FILES["picture"]["name"])) {
			//echo '<div class="alert alert-warning">File sudah ada<button class="close" data-dismiss="alert">&times;</button></div>';
			move_uploaded_file($_FILES["picture"]["tmp_name"], "picture2/" . $_FILES["picture"]["name"]);
			$foto_profil = "picture2/" . $_FILES["picture"]["name"];
		}
		else {
			move_uploaded_file($_FILES["picture"]["tmp_name"], "picture/" . $_FILES["picture"]["name"]);
			$foto_profil = "picture/" . $_FILES["picture"]["name"];
		}
	}
}


?>
	</div>
		</div>
		
<form method="post">
<div class="span5">
<div class="well">

<div class="control-group">
<center>
<header> EDIT PROFIL </header> </center>
    <label class="control-label" for="inputNama">Nama</label>
    <div class="controls">
      <input type="text" name="nama" id="inputNama">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Email</label>
    <div class="controls">
      <input type="text" name="email" id="inputEmail">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputUsername">Username</label>
    <div class="controls">
      <input type="text" name="username" id="inputUsername">
    </div>
  </div>
   <div class="control-group">
    <label class="control-label" for="inputPassword">Password</label>
    <div class="controls">
      <input type="password" name="password" id="inputPassword">
    </div>
  </div>
   <div class="control-group">
    <label class="control-label" for="inputUlangiPassword">Ulangi Password</label>
    <div class="controls">
      <input type="password" name="ulangpassword" id="inputUlangiPassword">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputInstansi">Instansi Pendidikan</label>
    <div class="controls">
      <input type="text" name="instansi" id="inputInstansi">
    </div>
  </div>
  
      
      <button type="submit" name = "update" class="btn">Update</button>
	  <?php
		include ("update.php");
		$profil=array();
		if(isset($_POST['update']) ){
			$profil=array(
				"nama"=>$_POST['nama'], 
				"email"=>$_POST['email'],
				"username"=>$_POST['username'],
				"password"=>$_POST['password'],
				"ulangpass"=>$_POST['ulangpassword'],
				"instansi"=>$_POST['instansi']
				
			);
		$update=new Update();
		$update->insert($profil);
		}
	  ?>
    </div>
  </div>
</form>
</div>
</div>
<div class="span5">
<div class="well">
<img src = "1005.jpg""/>
</div>
</div>

</div>

</body>
</html>
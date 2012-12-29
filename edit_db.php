
<html>
  <head>
    
  <title>BUKET KUKET </title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
  </head>
  <body>


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
	
	$tampil = "SELECT foto_profil FROM edit_profil where id=".$_GET['id'];
				
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
<br/>Ganti foto
<br/><input name="picture" type="file">
</div>
		
<form method="post" action="home.php">
<div class="span5">
<div class="well">

<div class="control-group">
<center>
<header> EDIT PROFIL </header> </center>
    <label class="control-label" >Nama</label>
    <div class="controls">
      <input type="text" name="nama" id="inputNama">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" >Username</label>
    <div class="controls">
      <input type="email" name="username" id="username" placeholder="Gunakan Alamat Email">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" >Alamat</label>
    <div class="controls">
      <input type="text" name="alamat" id="alamat">
    </div>
  </div>
   <div class="control-group">
    <label class="control-label" >No telepon</label>
    <div class="controls">
      <input type="no_telp" name="no_telp" id="no_telp">
    </div>
  </div>
   <div class="control-group">
    <label class="control-label" for="inputUlangiPassword">Password</label>
    <div class="controls">
      <input type="password" name="password" id="Password">
    </div>
  </div>
  
      
      <button type="submit" name = "update" class="btn">Update</button>
	  <?php
		include ("update.php");
		$profil=array();
		if(isset($_POST['update']) ){
			$profil=array(
				"nama"=>$_POST['nama'], 
				"username"=>$_POST['username'],
				"alamat"=>$_POST['alamat'],
				"no_telp"=>$_POST['no_telp'],
				"password"=>$_POST['password']
				
				
			);
		$update=new Update();
		$update->insert($profil);
		}
	  ?>
    </div>
  </div>
</form>


<div class="span5">
<div class="well">
<!--<img src = "1005.jpg"/>-->
<?php 
include ('lihat_foto.php');
?>
</div>
</div>


</body>
</html>
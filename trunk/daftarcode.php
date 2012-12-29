<?php
include"koneksi.php";
//require_once 'db_bk.php';

$nama 		= $_POST['nama'];
$username 	= $_POST['username'];
$alamat 	= $_POST['alamat'];
$no_telp 	= $_POST['no_telp'];
$akun 		= $_POST['akun'];
$password 	= $_POST['password'];
$foto_profil= null;
$set 		= true;

$allowed_types=array(
    'image/gif',
    'image/jpeg',
    'image/png'
);

if (in_array($_FILES["foto_profil"]["type"], $allowed_types) && 
            ($_FILES["foto_profil"]["size"] < 500000000)) {

		if($_FILES["foto_profil"]["error"] > 0) {
			echo '<div class="alert alert-danger">Error<button class="close" data-dismiss="alert">&times;</button></div>';
			$set = false;
			}
			
		else {
			if (file_exists("foto_profil/" . $_FILES["foto_profil"]["name"])) {
				echo '<div class="alert alert-warning">File sudah ada<button class="close" data-dismiss="alert">&times;</button></div>';
				move_uploaded_file($_FILES["foto_profil"]["tmp_name"], "foto_profil2/" . $_FILES["foto_profil"]["name"]);
				$foto_profil = "foto_profil/" . $_FILES["foto_profil"]["name"];
			}
			else {
				move_uploaded_file($_FILES["foto_profil"]["tmp_name"], "foto_profil/" . $_FILES["foto_profil"]["name"]);
				$foto_profil = "foto_profil/" . $_FILES["foto_profil"]["name"];
			}
		}
	}
	
	if(!empty ($username)){
	
		$sql = mysql_query("INSERT INTO edit_profil VALUES('$nama','$username','','$alamat','$no_telp','$password','$foto_profil','$akun',now())");
		
		//$sql = mysql_query("INSERT INTO edit_profil VALUES('".$nama."','".$username."','".$alamat"','".$no_telp."','".$password."','".$foto_profil."','".$akun."',now())");
		
		if($sql){
		//echo "katakata";
		//header('Location:home.php');
		?>
		<script language ="JavaScript">
		document.location='home.php';
		alert('anda berhasil melakukan daftar akun');
		</script>
		<?php
			//header('Location:home.php');
	}
	}
	//else {
	//header('Location:home.php?failed');
	//}
	?>
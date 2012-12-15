<?php

require_once 'koneksi.php';




$nama		= $_REQUEST ['nama'];
$username	= $_REQUEST['username'];
$alamat		= $_REQUEST['alamat'];
$no_telepon	= $_REQUEST['notelp'];
$password	= $_REQUEST['password'];
$foto_profil		= null;
$pilihan	= $_REQUEST['pilihan'];

$set = true;



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

$db = new db_bk($host,$user,$pass,$dbnm);
$db -> _connect();
//cek email sudah ada apa belum 
$sql = 'select * from edit_profil where username="'.$username.'"';
$query = mysql_query( $sql );
$row = mysql_fetch_row( $query );

	
if( !empty( $row[1] ) ){
	//echo 'EMAIL SUDAH TERDAFTAR<br>';
	//$error++;
	$set = false;
}

if($set) {	
	$data_user = array(
		'nama' => $nama,
		'username' => $username,
		'alamat' => $alamat,
		'notelp' => $no_telepon,
		'password' => $password,
		'foto_profil' => $foto_profil,
		'pilihan' => $pilihan
		
	);
	
	$db->set_data($data_user);
	header("location:home.php?success");
}

else {
	header("location:signup.php?failed");
	//echo '<div class="alert alert-danger">File tidak memenuhi syarat<button class="close" data-dismiss="alert">&times;</button></div>';
	$set = false;
}
?>
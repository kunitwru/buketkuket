<?php

require_once 'config.php';
require_once 'db_indoantik.php';



//$id_pengguna		= $_REQUEST['id_pengguna'];
$email_pengguna		= $_REQUEST['email_pengguna'];
$nama_pengguna		= $_REQUEST['nama_pengguna'];
$no_telepon			= $_REQUEST['no_telepon'];
$alamat_pengguna	= $_REQUEST['alamat_pengguna'];
$kodepos			= $_REQUEST['kodepos'];
$id_provinsi		= $_REQUEST['id_provinsi'];
$kota				= $_REQUEST['kota'];
$foto_profil		= null;
$id_tipe_pengguna	= $_REQUEST['id_tipe_pengguna'];
$password			= $_REQUEST['password'];

$set = true;



$allowed_types=array(
    'image/gif',
    'image/jpeg',
    'image/png',
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
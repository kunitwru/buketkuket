<?php
mysql_connect("localhost","root","");
mysql_select_db("rbpl");


$username=$_POST['username']; 
$password=$_POST['password'];
@$pilihan=$_POST['pilihan']; 

$sql="SELECT * FROM identitas WHERE username='$username' and password='$password' and pilihan='$pilihan'";
$result=mysql_query($sql);

$count=mysql_num_rows($result);
	if($count == true){


	$_SESSION['daftar']='true';
	
	header("location:beranda.php?success");
	}
	else {
	echo "<script>alert('Username atau password ada yang salah !');
			javascript:history.go(-1);</script>";	
	}


?>


<?php  
require_once("connect.php");   
$conn = mysql_connect('localhost','root','') or die ('Error connecting to mysql');
mysql_select_db('rbpl',$conn);      
if($_POST["button"]=="Daftar")  
{  
    $username = $_POST["username"];  
    $password = $_POST["password"];
	@$pilihan = $_POST["pilihan"];
	
      
    $query="INSERT INTO identitas( username, password, pilihan) 
	VALUES( '$username', '$password', '$pilihan')";   
    $result=mysql_query($query);
	if($result){  
        include 'daftar.php';
		echo "data berhasil disimpan";		
    }else{
		include 'daftar.php';
		echo "data gagal disimpan";
}
}     
?>
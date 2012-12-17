<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>RBPL</title>
</head>
<body>
<p>
<?php
$user = 'root';
$host = 'localhost';
$link = mysql_connect($host, $user,'');
if (!$link) {
die ('tidak connect ni:' . mysql_error());
}
mysql_select_db('konfirmasi', $link);

if(isset($_GET['nama_inputtext']) && isset($_GET ['username_inputtext']) && isset($_GET ['password_inputtext']) && isset($_GET ['email_inputtext']) && isset($_GET ['alamat_textarea'])&& isset($_GET ['jumlah_inputtext'])){
$nama = $_GET['nama_inputtext'];
$username = $_GET ['username_inputtext'];
$password = $_GET ['password_inputtext'];
$email = $_GET ['email_inputtext'];
$alamat = $_GET ['alamat_textarea'];
$jumlah = $_GET ['jumlah_inputtext'];
$sql_query = "INSERT INTO hasil values('".$nama."','".$username."','".$password."','".$email."','".$alamat."','".$jumlah."')";
mysql_query ($sql_query);
echo "lanut";
}

echo "Data Berhasil Dimasukkan<br/>";

//while ($row = mysql_fetch_array($result)){
//echo $row ['Nama']." | ".$row ['Email']." | ".$row ['HP']." | ".$row ['Pesan'] ."<br/>";
//	} 
?>
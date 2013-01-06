<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>RBPL</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<?php
$user = 'root';
$host = 'localhost';
$link = mysql_connect($host, $user,'');
if (!$link) {
die ('tidak connect ni:' . mysql_error());
}
mysql_select_db('coba');
$result = mysql_query("SELECT * FROM buku");

echo "<h1>List Buku</h1>";
echo "<u1>";

while ($data = mysql_fetch_array($result)){
	echo "<li>$data[nama_buku] tingkat : $data[tingkatan] kelas $data[kelas] || jumlah stock: $data[jumlah] : @Rp. $data[harga] </li>";
	}
echo "</u1>";
?>
<a href="order.php">[order]</a>
</body>
<html>
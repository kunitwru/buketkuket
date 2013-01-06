<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Buket Kuket</title>
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
mysql_select_db('coba', $link);
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST ['email'];
$buku = $_POST['buku'];
$jumlah = $_POST['jumlah'];
/**$ID_Lama = mysql_fetch_array(mysql_query("SELECT MAX(id_order)+1 FROM order"));
$ID=$ID_Lama [0];

$lama = mysql_result(mysql_query("SELECT MAX(id_order) FROM order"),0);
if ($lama == 0){
	$id_or = 101;
} else {
	$id_or = $lama+1;
} **/

mysql_query("INSERT INTO `order` (nama_order, alamat_order, email_order, id_buku, jumlah_order) VALUES ('$nama', '$alamat', '$email', '$buku', '$jumlah')");
$result = mysql_query("SELECT * FROM buku WHERE id_buku = '$buku'");
$data = mysql_fetch_array($result);		
$total = $jumlah * $data['harga'];

echo "<h2>Terima Kasih</h2>";
echo "<p>Anda telah berhasil</p>";
echo "<p>Nama : $nama</p>";
echo "<p>Alamat : $alamat</p>";
echo "<p>Email : $email</p>";
echo "<p>Buku : $data[nama_buku]</p>";
echo "<p>Harga : $jumlah x Rp. $data[harga] = Rp. $total</p>";

$stock = mysql_fetch_array(mysql_query("SELECT(`buku`.`jumlah` - `order`.`jumlah_order`) FROM `buku`,`order` WHERE `buku`.`id_buku`='$buku' AND `order`.`id_buku`='$buku'"));
$stock_baru=$stock[0];
mysql_query("UPDATE buku SET jumlah = '$stock_baru' WHERE `buku`.`id_buku`='$buku'");

?>
</body>
</html>
html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Buket Kuket</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<?php
// mengambil data yang telah di submit
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$buku = $_POST['buku'];
$jumlah = $_POST['jumlah'];
 
// koneksi ke database
mysql_connect('localhost', 'root', '');
// pilih database
mysql_select_db('bookstore');
// memasukkan data ke dalam tabel orders
mysql_query("INSERT INTO orders (order_name, order_address, book_id, order_amount) 
             VALUES ('$nama', '$alamat', '$buku', '$jumlah')");
 
// mengambil data dari tabel books
$result = mysql_query("SELECT * FROM books WHERE book_id = '$buku'");
$data = mysql_fetch_array($result);
$total = $jumlah * $data['book_price'];
// menampilkan konfirmasi order
echo "<h2>Terima kasih !!</h2>";
echo "<p>Anda telah berhasil melakukan pembelian, berikut data pembelian Anda:</p>";
echo "<p>Nama : $nama</p>";
echo "<p>Alamat : $alamat</p>";
echo "<p>Buku : $data[book_name]</p>";
echo "<p>Harga : $jumlah x $data[book_price] = $total</p>";
?>
</body>
</html>
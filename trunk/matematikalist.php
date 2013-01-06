<html>
	<head> <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

	</head>
<body>
		<div class="navbar">
			<div class="navbar-inner">
				<a class="brand" href="home.php">Home</a>
				<ul class="nav">
					<li><a href="bukusdlist.php">Buku SD</a></li>
					<li><a href="bukusmplist.php">Buku SMP</a></li>
					<li><a href="#">Buku SMA</a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					
			
							<div class="btn-group pull-right" >
								<a class="btn btn-medium" href="logout.php">
									<i class="icon-user"></i><span class="hidden-phone"> Logout</span>
									<span class="caret"></span>
								</a>
							</div>
							
	
				</ul>
				</div>
				</div>
<title>Matematika</title>
		<body>
			<form class="form-horizontal" method="post" action="logincode.php"> 
				<div class="modal-header">
  
				<h2 align="center">Matematika</h2>
				<h5 align="center">Berisi daftar buku Matematika yang siap dibeli</h5>
				</div>
<?php
	include 'connect.php';
	$sql=mysql_query("select * from matematika ORDER BY No ASC");
?>
	<p align="center">Daftar Buku</p>

		<div align="center">
		<form id="form1" name="form1" method="post" action="">
	<table class="table-bordered" width="1000" border="1">
		
    
      
      <td width="20"><div align="center">No</div></td>
      <td width="200"><div align="center">Nama Buku</div></td>
	  <td width="20"><div align="center">Jumlah</div></td>
	  
	  <div class="btn-group pull-right" >
	
							
	<?php while($kolom=mysql_fetch_array($sql)){
    ?>
	
    <tr>
      <td align="center"><?php echo $kolom[0];?></td>
      <td><?php echo $kolom[1];?></td>
      <td align="center"><?php echo $kolom[2];?></td>
      
    </tr>
	
	<?php } ?> 
	</div>
  </table>  
</form>
</body>
</html>
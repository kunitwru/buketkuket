<html>
<head> <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<div class="well">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab">Konfirmasi</a></li>
      <li><a href="#Konfirmasi" data-toggle="tab">BuketKuket</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
        <form id="tab">
            <label>Nama Sekolah</label>
            <input type="text" name="namasekolah_inputtext" class="input-xlarge">
            <label>Username</label>
            <input type="text" class="input-xlarge">
			<label>Password</label>
            <input type="text" class="input-xlarge">
            <label>Email</label>
            <input type="text"  class="input-xlarge">
            <label>Alamat</label>
            <textarea  rows="3" class="input-xlarge">
            </textarea>
            <label>Jumlah Pembelian</label>
            <input type="text"  class="input-xlarge">
          	<div>
        	    <button class="btn btn-primary">Next</button>
        	</div>
        </form>
      </div>
      <div class="tab-pane fade" id="profile">
    	<form id="tab2">
        	<label>New Password</label>
        	<input type="password" class="input-xlarge">
        	<div>
        	    <button class="btn btn-primary">Update</button>
        	</div>
    	</form>
      </div>
  </div>

</body>
</html>
